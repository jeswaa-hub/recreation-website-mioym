# Plan: Pagpapataas ng Accuracy ng AI Chat Bot Integration

## Summary
- Layunin: gawing mas accurate ang AI chatbot para sa MIOYM domain questions sa pamamagitan ng query-specific retrieval, mas mahigpit na prompt rules, at mas deterministic na fallback/handoff behavior.
- Success criteria:
  - Ang sagot ay nakabase lang sa verified MIOYM data tulad ng properties, team, contact info, at extracted website content.
  - Kapag walang reliable source, malinaw na sasabihin ng bot na wala itong verified answer at magha-handoff sa human/contact channel.
  - Bawas hallucinations, mas consistent ang sagot sa property at company questions, at mas predictable ang formatting/output.
- Scope decisions:
  - In scope: retrieval + prompt hardening.
  - Out of scope: general knowledge mode, content refresh workflow changes, at admin UI para sa chatbot tuning.

## Current State Analysis
- [ChatWidget.php](file:///c:/Users/LENOVO/Desktop/MioymWebsite/app/Livewire/ChatWidget.php)
  - Ang widget ay laging dumadaan sa `GroqService`.
  - Ipinapasa ang buong chat history pero walang intent classification, retrieval metadata, o guardrails bago tumawag sa model.
- [GroqService.php](file:///c:/Users/LENOVO/Desktop/MioymWebsite/app/Services/GroqService.php)
  - Buong properties, team, testimonials, at formatted website content ang isinasama sa iisang malaking system prompt.
  - Walang query-specific source selection kahit may `WebsiteContent::findRelevant()`.
  - Mataas ang chance ng noisy context, prompt dilution, at hallucinated synthesis dahil sabay-sabay ang lahat ng source data.
  - Ang fallback logic ay keyword-based pero nakafocus lang sa ilang patterns; wala itong explicit source confidence policy.
- [WebsiteContent.php](file:///c:/Users/LENOVO/Desktop/MioymWebsite/app/Models/WebsiteContent.php)
  - May existing `findRelevant()` at `formatForPrompt()` na puwedeng gawing base ng retrieval layer.
  - Hindi pa ito integrated sa actual request-time answer generation ng chatbot.
- [ContentExtractor.php](file:///c:/Users/LENOVO/Desktop/MioymWebsite/app/Services/ContentExtractor.php)
  - May extraction pipeline para sa Blade content papuntang `website_contents`.
  - Sapat ito bilang current source ingest; hindi kailangan baguhin sa unang phase ng accuracy improvements.
- [GeminiService.php](file:///c:/Users/LENOVO/Desktop/MioymWebsite/app/Services/GeminiService.php)
  - May alternative provider pero hindi ito active sa current widget path.
  - Hindi kailangan isama sa first implementation para manatiling focused ang scope.

## Proposed Changes

### 1. Refactor ang Groq request path into retrieval-first flow
- File: [GroqService.php](file:///c:/Users/LENOVO/Desktop/MioymWebsite/app/Services/GroqService.php)
- What:
  - Hatiin ang current monolithic prompt generation sa mas maliliit na methods:
    - `detectIntent()` o equivalent lightweight routing
    - `collectRelevantContext()`
    - `buildSystemPrompt()`
    - `buildUserPrompt()`
    - `shouldForceHandoff()` para sa no-answer scenarios
  - Gumamit ng `WebsiteContent::findRelevant($userMessage, ...)` sa halip na `formatForPrompt()` para query-specific ang website context.
  - Mag-filter ng relevant properties/team/testimonials batay sa user query sa halip na `all()`.
- Why:
  - Bababa ang irrelevant prompt noise.
  - Mas malaki ang chance na ang model ay sumagot gamit ang tamang source subset.
- How:
  - Mag-build ng domain context packet per request:
    - Relevant website content snippets
    - Matching properties
    - Matching team members
    - Stable company/contact constants
  - Mag-cap ng bilang ng snippets/items para predictable ang prompt size.
  - Kung walang relevant results at non-trivial ang tanong, gumamit ng strict unknown/handoff response.

### 2. I-hardening ang system prompt para maging source-bound
- File: [GroqService.php](file:///c:/Users/LENOVO/Desktop/MioymWebsite/app/Services/GroqService.php)
- What:
  - Palitan ang kasalukuyang generic-friendly prompt ng stricter instruction set:
    - Sumagot lang mula sa provided MIOYM context
    - Huwag mag-imbento ng facts
    - Kapag kulang ang context, sabihin na walang verified information
    - I-suggest ang `Talk to a Human`, phone, o email para sa escalation
    - Gumamit ng consistent concise formatting
  - I-encode ang domain-only behavior para hindi na sumagot ng unrelated general knowledge.
- Why:
  - Ito ang pinili mong definition ng “mas accurate”: mas mababang hallucination at mas mataas na trustworthiness sa business/domain answers.
- How:
  - Gawing explicit ang response policy:
    - `verified answer`
    - `clarify if needed`
    - `unknown + handoff`
  - Lagyan ng special-case rules para sa contact info, office location, service area, at property lookups.

### 3. Ayusin ang fallback logic para aligned sa strict accuracy mode
- File: [GroqService.php](file:///c:/Users/LENOVO/Desktop/MioymWebsite/app/Services/GroqService.php)
- What:
  - I-refactor ang `getFallbackResponse()` para:
    - Unahin ang verified static business facts
    - Mas malinaw ang no-data response
    - Hindi default sa generic property dump kapag hindi match ang query
  - I-handle ang common domain intents:
    - office/contact
    - available properties
    - budget-based search
    - team/company info
    - unsupported query
- Why:
  - Sa ngayon, may tendency ang fallback na magbigay ng sobrang broad list kahit hindi iyon ang pinaka-accurate na sagot.
- How:
  - I-map ang fallback per intent.
  - Kapag walang confident structured answer, `unknown + handoff` ang ibalik.

### 4. Limitahan at linisin ang conversation history na ipinapasa sa model
- Files:
  - [ChatWidget.php](file:///c:/Users/LENOVO/Desktop/MioymWebsite/app/Livewire/ChatWidget.php)
  - [GroqService.php](file:///c:/Users/LENOVO/Desktop/MioymWebsite/app/Services/GroqService.php)
- What:
  - Limitahan ang history window sa latest relevant turns lang.
  - Iwasan na mapasama ang buong assistant verbosity sa sobrang habang context.
- Why:
  - Mas maikli at mas focused na context ang karaniwang mas accurate para sa task-bounded chatbot.
- How:
  - Panatilihin ang recent turns only.
  - Optional na alisin ang initial greeting mula sa context kapag hindi na ito helpful.

### 5. Gawing mas visible ang escalation path sa UX nang hindi binabago ang main scope
- File: [chat-widget.blade.php](file:///c:/Users/LENOVO/Desktop/MioymWebsite/resources/views/livewire/chat-widget.blade.php)
- What:
  - Minimal copy adjustments lang kung kailangan, para mas malinaw ang human handoff kapag `unknown` o complex inquiry ang sagot.
- Why:
  - Importante sa strict accuracy mode na may graceful recovery kapag walang verified answer.
- How:
  - Reuse existing `Talk to a Human` affordance.
  - Hindi kailangan ng structural UI rewrite.

### 6. Magdagdag ng focused automated checks para sa accuracy-critical paths
- Possible files:
  - [tests/Feature](file:///c:/Users/LENOVO/Desktop/MioymWebsite/tests/Feature)
  - bagong targeted test files para sa chatbot service behavior
- What:
  - Magdagdag ng tests para sa deterministic parts:
    - retrieval selection
    - fallback intent routing
    - unknown + handoff behavior
    - property filtering by budget/status
- Why:
  - Ito ang pinakamabilis na paraan para maiwasan ang regression sa accuracy rules kahit magpalit pa ng prompt text.
- How:
  - I-mock ang external HTTP call kung kinakailangan.
  - I-test ang structured helper methods sa service level.
  - Iwasan ang fragile snapshot-style tests para sa buong LLM output.

## Assumptions & Decisions
- Primary provider ay mananatiling `GroqService` dahil ito ang kasalukuyang ginagamit ng widget.
- Hindi muna gagalawin ang `GeminiService` sa unang pass para maiwasan ang double-maintenance.
- Hindi kasama ang pagbabago sa extraction workflow; gagamitin lang ang existing `WebsiteContent` data at `findRelevant()`.
- Domain-only mode ang target behavior:
  - company info
  - properties
  - team
  - testimonials
  - contact/location/service coverage
- Kapag hindi sapat ang source data, mas mahalaga ang trust kaysa completeness; kaya `unknown + handoff` ang default.

## Verification Steps
- Automated:
  - Patakbuhin ang targeted tests para sa `GroqService` helpers at fallback behavior.
  - I-check na walang syntax/lint diagnostics sa modified PHP files.
- Manual desktop/mobile chat checks:
  - Tanungin ang bot tungkol sa office address.
  - Tanungin ang bot tungkol sa available properties.
  - Tanungin ang bot ng budget-specific query tulad ng “properties under $500k”.
  - Tanungin ang bot tungkol sa team/company info mula sa extracted site content.
  - Tanungin ang bot ng unsupported o kulang-sa-data question at i-verify na `unknown + handoff` ang response.
- Quality checks:
  - Walang invented facts sa sagot.
  - Hindi naglalabas ng irrelevant full property dump kung hindi kailangan.
  - Consistent ang phone/email/handoff wording.
