<?php
/**
 * Richardson Fire Protection — inc/location-data.php
 * City-specific data for all 7 location pages.
 */

function rfp_location_data( $slug ) {
    $all = rfp_all_locations();
    return $all[ $slug ] ?? null;
}

function rfp_all_locations() {
    return [

        // ── SACRAMENTO ────────────────────────────────────────────────────────
        'sacramento' => [
            'name'          => 'Sacramento',
            'slug'          => 'sacramento',
            'county'        => 'Sacramento County',
            'lat'           => 38.5816,
            'lng'           => -121.4944,
            'population'    => 524943,
            'intro'         => 'Sacramento is one of the fastest-growing development markets in California, with active mixed-use, multifamily, and warehouse pipelines across Natomas, Midtown, and the Central City. Richardson Fire Protection works directly with GCs and developers on ground-up and TI projects, delivering NFPA 13-compliant design-build scopes on the timelines Sacramento\'s market demands.',
            'building_types' => [
                'Mixed-Use & Multifamily',
                'Office & Retail',
                'High-Bay Warehouse & Distribution',
                'Adaptive Reuse & Historic TI',
            ],
            'ahj_name'      => 'Sacramento City Fire Department',
            'nearby_cities' => [ 'roseville', 'rocklin', 'davis', 'stockton' ],
            'services_note'  => 'SCFD Fire Prevention Division handles plan review. Richardson submits stamped hydraulic calculations and shop drawings directly and coordinates all required pre-final walkthroughs.',
            'neighborhoods'  => [ 'Natomas', 'Midtown', 'Central City', 'Downtown Sacramento', 'East Sacramento', 'Rancho Cordova', 'West Sacramento', 'Oak Park', 'Arden-Arcade' ],
            'faqs'           => [
                [
                    'q' => 'What fire protection standards does the Sacramento City Fire Department enforce?',
                    'a' => 'SCFD enforces NFPA 13 for commercial sprinklers, NFPA 72 for fire alarm, and NFPA 25 for inspections — consistent with California Fire Code (Title 19, CCR). Richardson submits stamped hydraulic calculations and shop drawings directly to SCFD Fire Prevention and coordinates all required pre-final walkthroughs.',
                ],
                [
                    'q' => 'Do GCs need a separate fire protection sub for Sacramento tenant improvements?',
                    'a' => 'Yes. California requires a C-16 licensed contractor for all fire sprinkler work. Richardson handles TI scopes in occupied buildings, working off-hours when needed to minimize disruption and keep your tenant\'s opening schedule on track.',
                ],
                [
                    'q' => 'How quickly can Richardson turn around a bid for a Sacramento project?',
                    'a' => 'We return complete, detailed bids within 24–48 hours of receiving your plans. For pre-construction consultations and scope calls, we\'re available same-day.',
                ],
                [
                    'q' => 'Can Richardson handle multifamily fire protection in Sacramento under NFPA 13R?',
                    'a' => 'Absolutely. NFPA 13R governs most low- and mid-rise apartment and condo projects in Sacramento. We design and install 13R systems from permit through certificate of occupancy, coordinating with SCFD and your structural GC throughout each phase.',
                ],
                [
                    'q' => 'What is the typical timeline for fire sprinkler permit approval in Sacramento?',
                    'a' => 'SCFD Fire Prevention Division typically reviews submittals in 4–6 weeks for standard commercial projects. We submit complete, well-organized packages the first time to avoid correction cycles that delay your critical path.',
                ],
                [
                    'q' => 'What happens if Sacramento City Fire Department requests plan revisions after first submittal?',
                    'a' => 'Correction cycles add 2–4 weeks per round. Richardson minimizes this risk by submitting complete, coordinated packages — stamped calcs, shop drawings, and NFPA code analysis — on the first attempt. When corrections do occur, we respond within 3–5 business days.',
                ],
                [
                    'q' => 'Does Richardson serve the Natomas and Midtown development corridors?',
                    'a' => 'Yes. Natomas is one of Sacramento\'s most active multifamily and mixed-use corridors. Richardson has completed projects across Natomas, Midtown, and Central City, and is familiar with SCFD\'s preferences for these high-volume development zones.',
                ],
                [
                    'q' => 'What is the ballpark cost for fire sprinkler installation in a Sacramento commercial building?',
                    'a' => 'Costs vary significantly by building type, size, and occupancy. As a general benchmark: light commercial runs $2–$4 per sq ft, ordinary hazard occupancies $3–$5, and high-hazard or high-rise systems $6–$10+. Call (916) 849-6441 for a project-specific estimate.',
                ],
            ],
            'primary_services' => [
                [
                    'icon'     => 'fa-solid fa-building',
                    'tag'      => 'Commercial',
                    'title'    => 'Commercial & Mixed-Use',
                    'desc'     => 'NFPA 13 design-build for Sacramento\'s active mixed-use, office, and adaptive-reuse pipeline from Midtown to Natomas.',
                    'features' => [ 'Wet & dry pipe systems', 'High-rise compliance (CBC 403)', 'Tenant improvement retrofit' ],
                    'link'     => '/commercial/',
                ],
                [
                    'icon'     => 'fa-solid fa-warehouse',
                    'tag'      => 'Industrial',
                    'title'    => 'Warehouse & Distribution',
                    'desc'     => 'ESFR and in-rack systems for Natomas and North Sacramento\'s growing logistics and e-commerce distribution corridor.',
                    'features' => [ 'ESFR high-bay systems', 'High-piled storage compliance', 'SacMetro FD coordination' ],
                    'link'     => '/industrial/',
                ],
                [
                    'icon'     => 'fa-solid fa-city',
                    'tag'      => 'Multifamily',
                    'title'    => 'Multifamily & Residential',
                    'desc'     => 'NFPA 13R systems for Sacramento\'s dense infill apartment and condo pipeline, from Oak Park to the Central City.',
                    'features' => [ 'NFPA 13R apartment systems', 'NFPA 13D single-family', 'Occupied building retrofits' ],
                    'link'     => '/residential/',
                ],
            ],
            'local_regulations' => [
                [
                    'code'      => 'Sacramento City Code Title 16',
                    'authority' => 'Sacramento City Fire Prevention Bureau',
                    'summary'   => 'Adopts the 2022 California Fire Code with local amendments. Requires automatic sprinklers in all new commercial occupancies over 3,000 sq ft and all new Group R (residential) buildings of any size.',
                ],
                [
                    'code'      => 'Sacramento Metro Fire District Ordinance',
                    'authority' => 'Sacramento Metropolitan Fire District',
                    'summary'   => 'Covers unincorporated Sacramento County. Enforces CFC compliance plus additional requirements for hazardous materials storage. Separate permit process from Sacramento City FD.',
                ],
                [
                    'code'      => 'California Fire Code (CFC) 2022',
                    'authority' => 'California State Fire Marshal',
                    'summary'   => 'State baseline adopted by Sacramento City and SacMetro FD. Governs all fire protection system design, installation, inspection, and contractor licensing via Title 19 CCR.',
                ],
                [
                    'code'      => 'CBC Section 403 — High-Rise',
                    'authority' => 'Sacramento City Building Department',
                    'summary'   => 'Buildings 75 ft or more above the lowest fire department access level require fully sprinklered systems, smoke control, and fire command centers under the California Building Code.',
                ],
                [
                    'code'      => 'SB 1205 (2018)',
                    'authority' => 'California State Fire Marshal / SCFD',
                    'summary'   => 'Requires fire protection system owners to submit inspection certification records to the State Fire Marshal. Sacramento City FD enforces compliance. Non-certified systems are subject to enforcement action.',
                ],
                [
                    'code'      => 'California Health & Safety Code §13100',
                    'authority' => 'California State Fire Marshal',
                    'summary'   => 'Governs fire protection contractor licensing. All fire sprinkler work in Sacramento requires a CSLB C-16 license and CSFM registration — Richardson holds both.',
                ],
            ],
            'fire_pump_note' => 'Richardson submits fire pump permit packages directly to SCFD Fire Prevention through the Accela portal — stamped NFPA 20 hydraulic calculations, pump data sheets, and controller wiring diagrams on the first submittal to avoid correction cycles.',
            'fire_pump_faqs' => [
                [
                    'q' => 'When does a Sacramento building require a fire pump under NFPA 13?',
                    'a' => 'A fire pump is required when available water supply pressure cannot meet the hydraulic demand of the sprinkler system. In Sacramento, this most commonly applies to high-rise buildings in the Central City and Natomas, multi-story mixed-use projects where supply pressure drops below system demand, and large warehouse distribution facilities with ESFR systems. SCFD Fire Prevention reviews the hydraulic analysis during plan check.',
                ],
                [
                    'q' => 'What does SCFD require in a fire pump room for a Sacramento commercial project?',
                    'a' => 'SCFD enforces NFPA 20 for pump room design: minimum clearances around the assembly, a dedicated electrical service, heat and ventilation (40°F minimum), a floor drain, and a test header stubbed outside the building. On high-rise projects in the Central City corridor, the pump room must also satisfy CBC high-rise fire command requirements.',
                ],
                [
                    'q' => 'How often must fire pumps be tested under NFPA 25 in Sacramento?',
                    'a' => 'NFPA 25 requires weekly churn (no-flow) tests, annual flow tests with pump performance curves, and internal inspection every five years for electric-drive pumps. Sacramento City FD enforces SB 1205, which requires inspection certification records to be submitted to the State Fire Marshal annually. Richardson provides annual testing and delivers the written reports required for SCFD compliance.',
                ],
                [
                    'q' => 'What are the most common fire pump failures in Sacramento\'s mixed-use and warehouse buildings?',
                    'a' => 'The most frequent issues we see are impeller wear from poor water quality in older Sacramento supply mains, controller faults due to power quality issues, and suction-pipe air entrainment in buildings with undersized water mains. Richardson\'s technicians diagnose and repair all of these — call (916) 849-6441 for 24/7 emergency service in Sacramento County.',
                ],
                [
                    'q' => 'Can Richardson install a fire pump during an occupied tenant improvement in Sacramento?',
                    'a' => 'Yes. We coordinate pump room construction with the GC to minimize downtime on the existing system. When the existing sprinkler system must be temporarily offline, we notify SCFD and schedule a fire watch per CFC Section 901.7 — a process we manage on behalf of the building owner for Natomas, Midtown, and Central City TI projects.',
                ],
            ],
            'testimonial' => [
                'quote'   => '',
                'author'  => '',
                'company' => '',
                'project' => '',
            ],
        ],

        // ── STOCKTON ─────────────────────────────────────────────────────────
        'stockton' => [
            'name'          => 'Stockton',
            'slug'          => 'stockton',
            'county'        => 'San Joaquin County',
            'lat'           => 37.9577,
            'lng'           => -121.2908,
            'population'    => 320804,
            'intro'         => 'Stockton\'s industrial corridor and growing logistics sector along I-5 and Highway 99 drive consistent demand for high-bay warehouse and cold-storage fire suppression scopes. Richardson Fire Protection brings deep experience in ESFR and in-rack sprinkler systems for Stockton\'s distribution and e-commerce facilities, working alongside GCs and developers who need a sub that knows San Joaquin County AHJ requirements.',
            'building_types' => [
                'High-Bay Warehouse & Logistics',
                'Cold Storage & Food Processing',
                'Industrial Manufacturing',
                'Multifamily & Mixed-Use',
            ],
            'ahj_name'      => 'Stockton Fire Department',
            'nearby_cities' => [ 'sacramento', 'fairfield', 'davis', 'roseville' ],
            'services_note'  => 'Stockton Fire Department requires commodity classification documentation for high-piled storage projects. Richardson provides complete storage analysis and ESFR design packages that clear SFD plan check without corrections.',
            'neighborhoods'  => [ 'Port Industrial Corridor', 'North Stockton', 'March Lane Corridor', 'I-5 Logistics Park', 'Downtown Stockton', 'South Stockton Industrial', 'Weston Ranch', 'Morada' ],
            'faqs'           => [
                [
                    'q' => 'What fire suppression system does a Stockton warehouse require?',
                    'a' => 'Most high-bay warehouses in Stockton require ESFR ceiling sprinklers or in-rack systems depending on commodity class, storage height, and building height. Richardson performs complete storage analysis and designs the system to NFPA 13 and FM Global standards as applicable.',
                ],
                [
                    'q' => 'Does Stockton Fire Department require a pre-application meeting for large industrial projects?',
                    'a' => 'For projects over 100,000 sq ft or with complex commodity classification, a pre-application meeting with SFD Fire Prevention is recommended and often required. Richardson facilitates and attends these meetings on behalf of the GC.',
                ],
                [
                    'q' => 'Can Richardson handle cold-storage fire protection in Stockton?',
                    'a' => 'Yes. Cold-storage facilities require dry-pipe or pre-action systems to prevent pipe freezing and address the unique ignition risks of refrigerated environments. We design and install these systems to NFPA 13 requirements and the specific operational demands of Stockton\'s food-distribution facilities.',
                ],
                [
                    'q' => 'What is the response time for emergency fire protection service in Stockton?',
                    'a' => 'Richardson\'s crew can be on-site in the Stockton area typically within 1–2 hours for emergency calls. Our 24/7 line is (916) 849-6441.',
                ],
                [
                    'q' => 'Does Richardson work with San Joaquin County on unincorporated industrial sites near Stockton?',
                    'a' => 'Yes. Unincorporated San Joaquin County fire protection permitting goes through the County Fire Department. Richardson is experienced with both City of Stockton and County SJC permitting and AHJ coordination.',
                ],
                [
                    'q' => 'How does Richardson handle ESFR design for e-commerce fulfillment centers in Stockton?',
                    'a' => 'E-commerce fulfillment centers typically involve high-piled mixed-commodity storage that changes over time. Richardson designs ESFR systems to accommodate the worst-case commodity scenario, so your facility can adapt operations without triggering a redesign.',
                ],
                [
                    'q' => 'What does fire sprinkler installation cost for a Stockton warehouse?',
                    'a' => 'High-bay warehouse ESFR systems in Stockton typically run $3–$6 per sq ft depending on ceiling height, commodity class, and rack configuration. In-rack systems add cost but allow lighter ceiling-only coverage. Call (916) 849-6441 for a detailed estimate.',
                ],
            ],
            'primary_services' => [
                [
                    'icon'     => 'fa-solid fa-warehouse',
                    'tag'      => 'Industrial',
                    'title'    => 'Warehouse & Logistics',
                    'desc'     => 'ESFR, in-rack, and cold-storage fire suppression for Stockton\'s I-5 and Highway 99 distribution corridors and Port-adjacent facilities.',
                    'features' => [ 'ESFR & in-rack systems', 'Commodity classification analysis', 'Cold storage dry-pipe' ],
                    'link'     => '/industrial/',
                ],
                [
                    'icon'     => 'fa-solid fa-building',
                    'tag'      => 'Commercial',
                    'title'    => 'Commercial & Restaurant',
                    'desc'     => 'NFPA 13 commercial systems for Stockton\'s downtown retail, restaurant, and mixed-use projects. Hood suppression and alarm coordination included.',
                    'features' => [ 'Restaurant hood suppression', 'Retail ordinary hazard', 'SFD plan coordination' ],
                    'link'     => '/commercial/',
                ],
                [
                    'icon'     => 'fa-solid fa-city',
                    'tag'      => 'Multifamily',
                    'title'    => 'Multifamily & Workforce Housing',
                    'desc'     => 'NFPA 13R systems for Stockton\'s expanding workforce housing and downtown residential conversion pipeline.',
                    'features' => [ 'NFPA 13R apartment systems', 'San Joaquin County permitting', 'Occupied retrofits' ],
                    'link'     => '/residential/',
                ],
            ],
            'local_regulations' => [
                [
                    'code'      => 'Stockton Municipal Code Chapter 15.30',
                    'authority' => 'Stockton Fire Department',
                    'summary'   => 'Adopts the 2022 California Fire Code with local amendments. Requires sprinklers in all new commercial buildings and mixed-use occupancies within city limits. SFD strictly enforces high-piled storage permitting.',
                ],
                [
                    'code'      => 'San Joaquin County Fire Ordinance',
                    'authority' => 'San Joaquin County Fire District',
                    'summary'   => 'Governs unincorporated San Joaquin County areas (Tracy, Lodi unincorporated). A separate permit is required for county-jurisdiction projects — critical to verify before submittal.',
                ],
                [
                    'code'      => 'NFPA 13 High-Piled Storage (SFD Enforcement)',
                    'authority' => 'Stockton Fire Department',
                    'summary'   => 'SFD strictly enforces commodity classification and in-rack or overhead sprinkler requirements for all warehouses storing goods over 12 ft. Pre-application meetings are required for facilities over 100,000 sq ft.',
                ],
                [
                    'code'      => 'Port of Stockton Fire Requirements',
                    'authority' => 'Port of Stockton Fire Authority',
                    'summary'   => 'Industrial and maritime projects within Port jurisdiction require additional review by Port of Stockton Fire. NFPA 30 flammable liquids storage rules are strictly enforced for Port-adjacent facilities.',
                ],
                [
                    'code'      => 'California Title 19 Article 3',
                    'authority' => 'California State Fire Marshal',
                    'summary'   => 'State Fire Marshal rules for fire suppression systems apply to all licensed occupancies in Stockton. CSFM registration required for all fire protection contractors operating in the city.',
                ],
                [
                    'code'      => 'SB 1205 (2018)',
                    'authority' => 'California State Fire Marshal / Stockton FD',
                    'summary'   => 'Requires fire protection system owners to certify inspection records with the State Fire Marshal annually. Stockton FD enforces for all commercial and industrial properties within city limits.',
                ],
            ],
            'fire_pump_note' => 'Stockton Fire Department requires complete commodity classification documentation alongside fire pump submittals for warehouse projects — Richardson packages the NFPA 20 pump design with the storage analysis to clear SFD plan check in a single submittal.',
            'fire_pump_faqs' => [
                [
                    'q' => 'Do high-bay warehouses in Stockton typically require a fire pump?',
                    'a' => 'Many Stockton warehouses require fire pumps. ESFR sprinkler systems have high hydraulic demands that frequently exceed available pressure from San Joaquin County water mains — particularly in the I-5 and Highway 99 logistics corridors where multiple large facilities share supply infrastructure. Richardson performs a water supply analysis before every ESFR design to confirm whether a pump is needed.',
                ],
                [
                    'q' => 'What fire pump type is best for cold-storage facilities in San Joaquin County?',
                    'a' => 'Vertical turbine fire pumps are often used for cold-storage and refrigerated distribution facilities in the Stockton area when pump room space is limited or the water supply connection is below grade. Electric-drive pumps are preferred for facilities with reliable utility power; diesel-drive pumps serve as backup where grid supply reliability is a concern. Richardson designs to NFPA 20 for all configurations.',
                ],
                [
                    'q' => 'How does NFPA 25 testing apply to fire pumps at Port of Stockton industrial facilities?',
                    'a' => 'Fire pumps at Port-jurisdiction facilities follow NFPA 25 annual testing requirements — performance curves, flow tests, and churn tests — enforced by the Port of Stockton Fire Authority rather than Stockton FD. Richardson performs NFPA 25 testing at both City and Port-jurisdiction facilities and provides the written test reports required under SB 1205.',
                ],
                [
                    'q' => 'What causes fire pump failures in Stockton\'s industrial facilities?',
                    'a' => 'The most common failures in San Joaquin County industrial facilities are bearing wear from infrequent cycling, seal leaks caused by vibration in high-traffic industrial environments, and controller faults from electrical surges common during summer peak demand. Diesel-drive pumps in cold-storage settings also have fuel degradation issues if not run on schedule. Richardson provides preventive maintenance contracts to catch these before they become emergencies.',
                ],
                [
                    'q' => 'How does Richardson submit fire pump permits to Stockton Fire Department?',
                    'a' => 'Richardson submits complete NFPA 20 design packages directly to SFD Fire Prevention — hydraulic calculations, pump data sheets, controller specifications, and commodity classification documentation for warehouse projects. Current SFD plan review for fire pump submittals runs 4–6 weeks. We submit complete, coordinated packages on the first attempt to avoid correction cycles.',
                ],
            ],
            'testimonial' => [
                'quote'   => '',
                'author'  => '',
                'company' => '',
                'project' => '',
            ],
        ],

        // ── ROSEVILLE ────────────────────────────────────────────────────────
        'roseville' => [
            'name'          => 'Roseville',
            'slug'          => 'roseville',
            'county'        => 'Placer County',
            'lat'           => 38.7521,
            'lng'           => -121.2880,
            'population'    => 147773,
            'intro'         => 'Roseville is the commercial and retail hub of Placer County, with sustained new construction in master-planned communities, regional retail centers, and medical office. Richardson Fire Protection has established relationships with Roseville Fire Department plan review staff and brings turnkey design-build capability to every project — from ground-up office parks to high-density multifamily along the Blue Oaks corridor.',
            'building_types' => [
                'Retail & Strip Centers',
                'Medical Office & Healthcare',
                'Master-Planned Residential',
                'Mixed-Use & Lifestyle Centers',
            ],
            'ahj_name'      => 'Roseville Fire Department',
            'nearby_cities' => [ 'rocklin', 'sacramento', 'yuba-city', 'davis' ],
            'services_note'  => 'Roseville Fire Department plan review currently runs 3–4 weeks for commercial projects. Richardson submits complete permit packages including hydraulic calculations and CAD shop drawings to minimize correction cycles.',
            'neighborhoods'  => [ 'Blue Oaks Corridor', 'Douglas Boulevard', 'Galleria Area', 'East Roseville Parkway', 'West Roseville', 'Historic Roseville', 'Fiddyment Farm', 'Olympus Pointe' ],
            'faqs'           => [
                [
                    'q' => 'How does fire sprinkler permitting work in Roseville?',
                    'a' => 'The Roseville Fire Department handles all fire protection plan review and permit issuance for projects within city limits. Richardson submits stamped hydraulic calculations, shop drawings, and a complete permit application. Current plan review turnaround is approximately 3–4 weeks for standard commercial projects.',
                ],
                [
                    'q' => 'Does Roseville require sprinklers in single-family homes?',
                    'a' => 'Yes. Roseville, like most California jurisdictions, requires residential fire sprinklers in new single-family construction under California Residential Code Section R313. Richardson installs NFPA 13D systems for custom homes and production builders in Roseville.',
                ],
                [
                    'q' => 'What NFPA standards apply to Roseville retail fire protection?',
                    'a' => 'Retail occupancies in Roseville are classified as ordinary hazard under NFPA 13. Depending on square footage, rack storage height, and occupancy classification, systems may also need to address NFPA 30 or high-piled storage requirements.',
                ],
                [
                    'q' => 'Can Richardson coordinate with Roseville Fire on medical office fire protection?',
                    'a' => 'Absolutely. Medical office and healthcare occupancies are classified as Group B or I-2 under California Building Code, with specific NFPA 13 and NFPA 72 requirements for patient areas and data closets. Richardson has experience coordinating with Roseville Fire on healthcare projects.',
                ],
                [
                    'q' => 'How quickly can we get a bid for a Roseville commercial project?',
                    'a' => 'Send us your plans and we return a complete, detailed bid within 24–48 hours. We\'re also available for pre-construction scope calls and budget estimates without full drawings.',
                ],
                [
                    'q' => 'Does Roseville Fire offer an expedited plan review option?',
                    'a' => 'Roseville Fire Department does offer an expedited review track for an additional fee. Richardson can guide you through the expedited submittal process and ensure your package meets the higher documentation standard required for fast-track review.',
                ],
                [
                    'q' => 'What makes fire protection on the Blue Oaks Corridor different from other Roseville projects?',
                    'a' => 'The Blue Oaks Corridor hosts a mix of high-density multifamily, lifestyle retail, and medical office that often requires mixed-occupancy NFPA 13 designs. Richardson engineers these combined-occupancy systems so the GC gets a single permit package covering the full building.',
                ],
            ],
            'primary_services' => [
                [
                    'icon'     => 'fa-solid fa-building',
                    'tag'      => 'Commercial',
                    'title'    => 'Commercial & Medical Office',
                    'desc'     => 'NFPA 13 systems for Roseville\'s Galleria retail corridor, medical office parks, and East Roseville Parkway commercial development.',
                    'features' => [ 'Medical office quick-response heads', 'Retail ordinary hazard', 'HCAI coordination' ],
                    'link'     => '/commercial/',
                ],
                [
                    'icon'     => 'fa-solid fa-city',
                    'tag'      => 'Residential',
                    'title'    => 'Residential & Master-Planned',
                    'desc'     => 'NFPA 13D systems for Roseville\'s active new home construction — required by local ordinance for all new single-family homes and townhomes.',
                    'features' => [ 'NFPA 13D required by Roseville code', 'NFPA 13R multifamily', 'WUI fire hardening compliance' ],
                    'link'     => '/residential/',
                ],
                [
                    'icon'     => 'fa-solid fa-industry',
                    'tag'      => 'Industrial',
                    'title'    => 'Light Industrial & Storage',
                    'desc'     => 'NFPA 13 systems for Roseville\'s Blue Oaks business parks, light manufacturing, and self-storage facilities along the I-80 corridor.',
                    'features' => [ 'Light hazard systems', 'Self-storage protection', 'Placer County coordination' ],
                    'link'     => '/industrial/',
                ],
            ],
            'local_regulations' => [
                [
                    'code'      => 'Roseville Municipal Code Title 10, Chapter 10.12',
                    'authority' => 'Roseville Fire Department',
                    'summary'   => 'Adopts the 2022 CFC. Roseville requires NFPA 13D fire sprinklers in ALL new single-family homes and townhomes — stricter than the California state minimum. Applies to all new construction and certain additions.',
                ],
                [
                    'code'      => 'Placer County Fire Code',
                    'authority' => 'Placer County Fire District',
                    'summary'   => 'Governs unincorporated Placer County areas (Granite Bay, Loomis, Lincoln unincorporated). Separate permit authority and process from Roseville FD — critical to verify jurisdiction before submittal.',
                ],
                [
                    'code'      => 'AB 38 (2019) — Fire Hardening Law',
                    'authority' => 'California Department of Forestry / Placer County',
                    'summary'   => 'Placer County contains extensive Tier 2 and Tier 3 Fire Hazard Severity Zones. Properties in these zones require fire hardening measures that interact with sprinkler system design and access routes.',
                ],
                [
                    'code'      => 'California WUI Code (CCR Title 14)',
                    'authority' => 'CAL FIRE / Placer County',
                    'summary'   => 'Applicable to Roseville\'s eastern hillside and foothill developments. Affects exterior construction standards and fire protection access design for new construction in Wildland-Urban Interface zones.',
                ],
                [
                    'code'      => 'HCAI (Health Care Access and Information)',
                    'authority' => 'California HCAI (formerly OSHPD)',
                    'summary'   => 'Medical facilities within Roseville require HCAI plan review and approval in addition to Roseville FD review. HCAI adds 6–10 weeks to the plan review timeline for licensed healthcare occupancies.',
                ],
            ],
            'fire_pump_note' => 'Roseville Fire Department\'s 3–4 week plan review timeline applies to fire pump permits — Richardson submits complete NFPA 20 packages including hydraulic calculations, pump data sheets, and controller wiring diagrams on the first attempt to keep Placer County project schedules intact.',
            'fire_pump_faqs' => [
                [
                    'q' => 'Does a medical office building in Roseville require a fire pump?',
                    'a' => 'Healthcare occupancies classified as Group I-2 (outpatient surgery, dialysis) often require fire pumps when the building footprint and sprinkler demand exceed available supply pressure. HCAI-regulated facilities require fire pump designs to be included in the HCAI review package, which runs parallel to Roseville FD plan review. Richardson coordinates both tracks simultaneously to prevent schedule conflicts.',
                ],
                [
                    'q' => 'What NFPA 20 requirements does Roseville Fire Department enforce for fire pump rooms?',
                    'a' => 'Roseville FD enforces NFPA 20 in full: dedicated electrical service, 40°F minimum ambient temperature, floor drain, adequate pump clearances, and a test header routed outside the building. For healthcare occupancies in Roseville, HCAI adds requirements for emergency power transfer to the Life Safety Branch within 10 seconds of a utility outage.',
                ],
                [
                    'q' => 'How often are fire pumps tested in Placer County under NFPA 25?',
                    'a' => 'NFPA 25 mandates weekly no-flow (churn) tests, monthly visual inspection, and annual flow performance tests. Placer County\'s SB 1205 enforcement means written test records must be available for Roseville Fire inspection at any time. Richardson provides annual testing contracts and delivers signed performance reports that satisfy both Roseville FD and State Fire Marshal certification requirements.',
                ],
                [
                    'q' => 'What fire pump design applies to Roseville\'s retail centers and lifestyle districts?',
                    'a' => 'Large retail centers on Douglas Boulevard and the Galleria corridor may require fire pumps when the combined NFPA 13 demand for the full retail footprint exceeds local supply pressure. Richardson performs a water supply analysis with the water district at bid phase so that pump requirements — and the associated cost — are known before construction documents are issued.',
                ],
                [
                    'q' => 'Can Richardson coordinate fire pump installation alongside HCAI-regulated healthcare construction in Roseville?',
                    'a' => 'Yes. Healthcare projects in Roseville face dual review — Roseville FD and HCAI. Richardson submits the fire pump package to both simultaneously and manages comment cycles from each reviewer independently. We are experienced with HCAI\'s fire pump documentation requirements, which are more detailed than standard CFC submittals and include seismic restraint calculations and listed equipment submittals.',
                ],
            ],
            'testimonial' => [
                'quote'   => '',
                'author'  => '',
                'company' => '',
                'project' => '',
            ],
        ],

        // ── ROCKLIN ──────────────────────────────────────────────────────────
        'rocklin' => [
            'name'          => 'Rocklin',
            'slug'          => 'rocklin',
            'county'        => 'Placer County',
            'lat'           => 38.7907,
            'lng'           => -121.2355,
            'population'    => 72326,
            'intro'         => 'Rocklin is a high-growth suburban market with active development in technology office campuses, self-storage, and multifamily along Interstate 80. Richardson Fire Protection supports GCs and developers throughout Rocklin with design-build fire sprinkler scopes, fast bid turnaround, and direct coordination with Rocklin Fire to keep certificate of occupancy timelines on track.',
            'building_types' => [
                'Tech Office & Corporate Campus',
                'Self-Storage & Mini-Warehouse',
                'Multifamily & Townhomes',
                'Light Industrial & Flex',
            ],
            'ahj_name'      => 'Rocklin Fire Department',
            'nearby_cities' => [ 'roseville', 'sacramento', 'yuba-city', 'davis' ],
            'services_note'  => 'Rocklin Fire Department plan review is handled through Placer County for projects in unincorporated areas. Richardson navigates both City of Rocklin and Placer County permitting depending on project location.',
            'neighborhoods'  => [ 'Stanford Ranch', 'Whitney Ranch', 'Sunset Whitney', 'I-80 Corridor', 'Old Town Rocklin', 'Granite Bay Adjacent', 'Loomis Adjacent' ],
            'faqs'           => [
                [
                    'q' => 'What fire protection does a self-storage facility in Rocklin require?',
                    'a' => 'Self-storage facilities are typically classified as Group S-1 occupancy. Depending on building height and construction type, NFPA 13 wet-pipe sprinklers may be required. Richardson has installed systems in Rocklin self-storage projects and coordinates with Rocklin Fire on occupancy-specific design questions.',
                ],
                [
                    'q' => 'Does Rocklin require fire sprinklers in office buildings?',
                    'a' => 'Yes. California Building Code requires fire sprinklers in most new commercial construction regardless of size. Office buildings in Rocklin are designed to NFPA 13 ordinary hazard standards. Richardson handles design, permit, and installation.',
                ],
                [
                    'q' => 'How does the permit process differ for projects near the Rocklin/Placer County line?',
                    'a' => 'Projects inside Rocklin city limits go through Rocklin Fire. Projects in unincorporated Placer County use Placer County Fire for plan review. Richardson confirms the correct AHJ at project inception to avoid submittal delays.',
                ],
                [
                    'q' => 'Can Richardson bid a multiphase Rocklin development?',
                    'a' => 'Yes. We regularly bid and build multiphase projects, coordinating sprinkler design across building types within a master-planned community. We provide phase-by-phase bid packages and can value-engineer across phases for cost efficiency.',
                ],
                [
                    'q' => 'What is Richardson\'s experience with tech office fire protection in Rocklin?',
                    'a' => 'Tech campuses include specialized suppression needs: clean agent systems for server rooms, pre-action systems for data centers, and standard NFPA 13 for office areas. Richardson designs and installs all of these under a single scope, reducing the number of subs your GC has to manage.',
                ],
                [
                    'q' => 'Can Richardson bid Rocklin and Roseville projects together for the same developer?',
                    'a' => 'Yes. We regularly cover multiple Placer County projects for the same GC or developer under coordinated contracts. This simplifies procurement, keeps bid packages consistent, and allows schedule coordination across sites.',
                ],
                [
                    'q' => 'What is the permit timeline comparison between Rocklin Fire and Placer County Fire?',
                    'a' => 'Rocklin Fire typically runs 3–4 weeks for plan review within city limits. Placer County Fire review for unincorporated areas is similar — 3–5 weeks. Richardson confirms the correct jurisdiction first, so you don\'t lose time re-submitting to the wrong authority.',
                ],
            ],
            'primary_services' => [
                [
                    'icon'     => 'fa-solid fa-building',
                    'tag'      => 'Commercial',
                    'title'    => 'Tech Office & Business Parks',
                    'desc'     => 'NFPA 13 systems for Rocklin\'s Stanford Ranch tech office parks, medical offices, and I-80 corridor commercial developments.',
                    'features' => [ 'Tech office wet-pipe systems', 'Server room pre-action', 'Light hazard design' ],
                    'link'     => '/commercial/',
                ],
                [
                    'icon'     => 'fa-solid fa-city',
                    'tag'      => 'Residential',
                    'title'    => 'Residential & Multifamily',
                    'desc'     => 'NFPA 13D systems for Rocklin\'s active Whitney Ranch and new-construction residential pipeline. Rocklin FD and Placer County permitting both served.',
                    'features' => [ 'NFPA 13D required new homes', 'NFPA 13R multifamily', 'Rocklin FD & Placer County coordination' ],
                    'link'     => '/residential/',
                ],
                [
                    'icon'     => 'fa-solid fa-warehouse',
                    'tag'      => 'Industrial',
                    'title'    => 'Self-Storage & Light Industrial',
                    'desc'     => 'NFPA 13 systems for Rocklin\'s I-80 corridor self-storage facilities and light industrial parks, with jurisdiction verification for Granite Bay-adjacent projects.',
                    'features' => [ 'Self-storage NFPA 13 systems', 'Light industrial protection', 'Granite Bay jurisdiction verification' ],
                    'link'     => '/industrial/',
                ],
            ],
            'local_regulations' => [
                [
                    'code'      => 'Rocklin Municipal Code Chapter 15.04',
                    'authority' => 'Rocklin Fire Department',
                    'summary'   => 'Adopts the 2022 CFC. Rocklin requires fire sprinklers in all new residential construction per State Fire Marshal mandate and local policy. CSLB C-16 license required for all fire sprinkler work.',
                ],
                [
                    'code'      => 'Placer County Fire District Jurisdiction',
                    'authority' => 'Placer County Fire District',
                    'summary'   => 'Granite Bay and unincorporated areas adjacent to Rocklin fall under Placer County Fire, not Rocklin FD. Verifying jurisdiction before permit submittal is critical — the wrong AHJ will reject the submittal.',
                ],
                [
                    'code'      => 'AB 38 — Fire Hardening (Placer County)',
                    'authority' => 'CAL FIRE / Placer County',
                    'summary'   => 'Portions of Rocklin — particularly eastern hills and Granite Bay-adjacent areas — fall within State Responsibility Areas subject to fire hardening requirements. Affects exterior construction and defensible space.',
                ],
                [
                    'code'      => 'CFC Chapter 31 & 57 — Storage & Flammable Liquids',
                    'authority' => 'Rocklin Fire Department',
                    'summary'   => 'Light industrial and self-storage facilities along the I-80 corridor must comply with CFC Chapter 31 (storage) and Chapter 57 (flammable and combustible liquids). Richardson reviews these requirements during the bid phase.',
                ],
                [
                    'code'      => 'Multiphase Construction Requirements',
                    'authority' => 'Rocklin Fire Department',
                    'summary'   => 'Rocklin\'s active residential construction zones require phased fire protection installation. Temporary water supply and partial system acceptance processes per CFC Section 901 are coordinated directly by Richardson.',
                ],
            ],
            'fire_pump_note' => 'Rocklin Fire handles fire pump permits inside city limits; Stanford Ranch and Granite Bay-adjacent projects in unincorporated Placer County route to Placer County Fire — Richardson confirms the correct AHJ at project kickoff to prevent a submittal to the wrong authority.',
            'fire_pump_faqs' => [
                [
                    'q' => 'Do tech office campuses in Rocklin\'s Stanford Ranch corridor require fire pumps?',
                    'a' => 'Tech campuses and corporate offices in Stanford Ranch can require fire pumps when multi-story buildings with large floor plates push sprinkler demand above available supply pressure. Server room pre-action and suppression systems add hydraulic demand that can push a project over the pump threshold. Richardson performs supply analysis early in design so pump requirements are known before the structural bid is issued.',
                ],
                [
                    'q' => 'Which AHJ handles fire pump permits for projects near the Rocklin / Placer County line?',
                    'a' => 'Rocklin Fire Department handles fire pump permits for parcels inside city limits; Placer County Fire handles unincorporated areas including portions of Granite Bay adjacent to Rocklin. Richardson verifies the correct jurisdiction before every submittal — submitting to the wrong AHJ means starting over and losing 3–4 weeks on your certificate of occupancy schedule.',
                ],
                [
                    'q' => 'What NFPA 25 maintenance does a fire pump require to stay compliant in Rocklin?',
                    'a' => 'NFPA 25 requires weekly churn tests, annual flow tests, and written performance documentation. Richardson provides annual testing contracts for corporate campuses and self-storage operators in Rocklin, delivering signed test reports that satisfy Rocklin FD inspection and California SB 1205 certification requirements. We also handle impeller inspection, seal service, and controller testing.',
                ],
                [
                    'q' => 'How does fire pump design differ for Rocklin self-storage vs. tech office buildings?',
                    'a' => 'Self-storage facilities are typically low-rise with moderate NFPA 13 demand, so fire pumps are less common unless the building is large or supply pressure is marginal. Tech campus buildings with server room suppression, data center pre-action, and multistory office floors combine higher demand with taller sprinkler risers, making pumps more likely. Richardson scopes each project individually rather than assuming a pump is or isn\'t needed.',
                ],
                [
                    'q' => 'Can Richardson service existing fire pumps on corporate campuses in Rocklin?',
                    'a' => 'Yes. We service all major fire pump brands — Aurora, Peerless, Patterson, Bell & Gossett — for Rocklin\'s existing commercial portfolio. Our NFPA 25 preventive maintenance program covers impeller inspection, packing or mechanical seal service, controller testing, and annual flow performance tests with written reports delivered for Rocklin FD compliance.',
                ],
            ],
            'testimonial' => [
                'quote'   => '',
                'author'  => '',
                'company' => '',
                'project' => '',
            ],
        ],

        // ── FAIRFIELD ────────────────────────────────────────────────────────
        'fairfield' => [
            'name'          => 'Fairfield',
            'slug'          => 'fairfield',
            'county'        => 'Solano County',
            'lat'           => 38.2494,
            'lng'           => -122.0400,
            'population'    => 121754,
            'intro'         => 'Fairfield sits at the crossroads of Solano County industrial development, with active logistics parks, manufacturing facilities, and defense-adjacent projects near Travis Air Force Base. Richardson Fire Protection serves GCs and developers throughout Solano County with industrial-grade fire suppression expertise and full familiarity with Fairfield Fire\'s plan review process.',
            'building_types' => [
                'Logistics & Distribution',
                'Defense-Adjacent Manufacturing',
                'Retail & Commercial',
                'Multifamily & Workforce Housing',
            ],
            'ahj_name'      => 'Fairfield Fire Department',
            'nearby_cities' => [ 'sacramento', 'stockton', 'davis', 'roseville' ],
            'services_note'  => 'Fairfield Fire Department has specific requirements for projects within proximity to Travis AFB that may involve coordination with base fire protection officers. Richardson has navigated this dual-AHJ process on prior Solano County projects.',
            'neighborhoods'  => [ 'Travis AFB Adjacent', 'North Fairfield Industrial', 'Cordelia Junction', 'Solano Mall Area', 'Downtown Fairfield', 'Green Valley', 'Business Park Drive Corridor' ],
            'faqs'           => [
                [
                    'q' => 'Does Fairfield Fire Department have special requirements for industrial facilities?',
                    'a' => 'Fairfield FD enforces California Fire Code and NFPA 13 for all industrial occupancies. For facilities adjacent to or supplying Travis Air Force Base, additional coordination with base fire protection staff may be required. Richardson has experience managing this dual-AHJ process.',
                ],
                [
                    'q' => 'What fire protection does a Fairfield distribution center need?',
                    'a' => 'Distribution centers typically require ESFR ceiling sprinklers or in-rack systems depending on storage height and commodity. We provide complete storage analysis, design the system to NFPA 13, and coordinate with Fairfield FD for plan approval and final inspection.',
                ],
                [
                    'q' => 'Can Richardson serve projects across Solano County, not just Fairfield?',
                    'a' => 'Yes. We regularly work throughout Solano County including Vacaville, Vallejo, Benicia, and Dixon. Each city has its own AHJ; we confirm the correct jurisdiction at project kickoff and manage all permit relationships.',
                ],
                [
                    'q' => 'How quickly does Fairfield Fire Department approve fire sprinkler permits?',
                    'a' => 'Standard commercial plan review in Fairfield typically runs 3–5 weeks. Richardson submits complete packages with all required calculations and drawings to avoid correction cycles that extend this timeline.',
                ],
                [
                    'q' => 'Does Richardson handle fire alarm coordination in Fairfield alongside sprinkler work?',
                    'a' => 'Yes. We install NFPA 72 fire alarm systems and coordinate sprinkler-alarm integration so that the GC has a single point of contact for the full fire life safety scope, eliminating interface coordination risk between multiple subs.',
                ],
                [
                    'q' => 'What are the dual-AHJ coordination requirements for projects near Travis AFB in Fairfield?',
                    'a' => 'Projects near or supplying Travis Air Force Base may require parallel review by Fairfield FD and the base Fire Protection Engineer. Richardson manages both tracks — submitting to the correct authorities simultaneously and tracking each review independently to prevent schedule conflicts.',
                ],
                [
                    'q' => 'How does Solano County compare to Fairfield Fire for industrial permitting?',
                    'a' => 'City of Fairfield permits go through Fairfield FD; unincorporated Solano County sites use Solano County Fire. Review timelines are comparable at 4–6 weeks. Richardson confirms jurisdiction at project kickoff — a critical step since the two boundaries can be unclear in industrial park zones.',
                ],
            ],
            'primary_services' => [
                [
                    'icon'     => 'fa-solid fa-warehouse',
                    'tag'      => 'Industrial',
                    'title'    => 'Logistics & Defense Manufacturing',
                    'desc'     => 'High-bay ESFR, special hazard, and defense-grade fire suppression for Fairfield\'s Cordelia, North Industrial, and Travis Boulevard logistics and manufacturing corridor.',
                    'features' => [ 'High-bay ESFR systems', 'Hazardous materials suppression', 'Travis AFB dual-AHJ coordination' ],
                    'link'     => '/industrial/',
                ],
                [
                    'icon'     => 'fa-solid fa-building',
                    'tag'      => 'Commercial',
                    'title'    => 'Commercial & Manufacturing',
                    'desc'     => 'NFPA 13 commercial systems for Fairfield\'s defense contractors, retail centers, restaurants, and paint booth or spray-finishing facilities.',
                    'features' => [ 'Defense manufacturing suppression', 'Retail sprinklers', 'Paint booth & spray finishing (NFPA 33)' ],
                    'link'     => '/commercial/',
                ],
                [
                    'icon'     => 'fa-solid fa-city',
                    'tag'      => 'Multifamily',
                    'title'    => 'Multifamily & Workforce Housing',
                    'desc'     => 'NFPA 13R systems for Fairfield\'s growing workforce housing pipeline, including Suisun City-adjacent projects and Green Valley hillside developments.',
                    'features' => [ 'NFPA 13R systems', 'Fairfield-Suisun FD permitting', 'WUI compliance (Green Valley)' ],
                    'link'     => '/residential/',
                ],
            ],
            'local_regulations' => [
                [
                    'code'      => 'Fairfield Municipal Code Title 19',
                    'authority' => 'Fairfield-Suisun Fire Department',
                    'summary'   => 'Adopts the 2022 CFC. Administered by the Fairfield-Suisun Fire Department, a joint agency serving both Fairfield and Suisun City. All fire sprinkler permits are submitted to this single joint authority.',
                ],
                [
                    'code'      => 'Solano County Fire and Life Safety Division',
                    'authority' => 'Solano County',
                    'summary'   => 'Governs unincorporated Solano County. A separate permit authority from Fairfield-Suisun FD for projects outside city limits. Richardson verifies jurisdiction before every submittal in the Fairfield area.',
                ],
                [
                    'code'      => 'Travis AFB Fire Requirements (DoD)',
                    'authority' => '60th Civil Engineer Squadron Fire Prevention Office',
                    'summary'   => 'Projects within Travis AFB boundaries require review by the DoD Fire Prevention Office — not CFC. Civilian projects near the base perimeter may require coordination with AFB fire authority. Richardson has experience managing dual-AHJ projects in this area.',
                ],
                [
                    'code'      => 'AB 38 & Solano County SRA',
                    'authority' => 'CAL FIRE / Solano County',
                    'summary'   => 'Eastern Fairfield hillside areas (Green Valley) fall within State Responsibility Areas. Fire hardening and defensible space requirements affect construction design, access routes, and fire protection system specifications.',
                ],
                [
                    'code'      => 'California Title 19 Article 6 — Pre-Engineered Systems',
                    'authority' => 'California State Fire Marshal',
                    'summary'   => 'Pre-engineered suppression systems (kitchen hoods, paint booths) require CSFM listing and separate installation certification. Common for Fairfield\'s manufacturing and food processing sector.',
                ],
                [
                    'code'      => 'Solano County Hazardous Materials Area Plan',
                    'authority' => 'Solano County Environmental Health',
                    'summary'   => 'Industrial facilities handling hazardous materials in Fairfield\'s Cordelia and Travis Blvd corridors require coordination with Solano County Environmental Health. Fire suppression systems for hazmat storage must satisfy both CFC and environmental requirements.',
                ],
            ],
            'fire_pump_note' => 'Fire pump permits for Fairfield projects route through Fairfield-Suisun Fire Department — a joint agency serving both Fairfield and Suisun City. Defense projects near Travis AFB may also require fire pump documentation submitted to the base Fire Protection Engineer alongside the Fairfield-Suisun package.',
            'fire_pump_faqs' => [
                [
                    'q' => 'Do Fairfield distribution centers and logistics parks require fire pumps?',
                    'a' => 'Yes — frequently. The Cordelia Junction and North Fairfield industrial corridors have large distribution facilities with ESFR ceiling sprinkler systems whose hydraulic demands often exceed local water supply pressure. Richardson performs a water supply analysis with Fairfield-Suisun utility contacts at bid phase to confirm pump requirements before construction documents are issued.',
                ],
                [
                    'q' => 'Does Travis AFB proximity affect fire pump permit requirements in Fairfield?',
                    'a' => 'Projects within Travis Air Force Base boundaries use the DoD fire protection review process — not the California Fire Code — and require fire pump documentation submitted to the 60th Civil Engineer Squadron Fire Prevention Office. Projects just outside AFB boundaries may still require coordination with base staff if they affect shared water supplies. Richardson has managed this dual-track process on prior Solano County projects.',
                ],
                [
                    'q' => 'How does NFPA 25 annual testing work for fire pumps in Solano County industrial facilities?',
                    'a' => 'NFPA 25 requires weekly churn tests, monthly visual checks, and an annual flow test with a performance curve. Solano County and Fairfield-Suisun FD enforce SB 1205 certification record requirements annually. Richardson performs NFPA 25 fire pump testing throughout the Cordelia and North Fairfield industrial corridors and provides the written reports required for AHJ compliance.',
                ],
                [
                    'q' => 'What fire pump types does Richardson install for defense manufacturing in Fairfield?',
                    'a' => 'For defense manufacturing and aerospace facilities near Travis Boulevard, Richardson installs electric-drive and diesel-drive fire pump assemblies to NFPA 20. Diesel-drive pumps are specified in facilities where DoD continuity-of-operations requirements mandate independent fire protection power or where utility reliability is a concern in the Cordelia Junction area.',
                ],
                [
                    'q' => 'Who issues fire pump permits for the Cordelia Junction industrial corridor in Fairfield?',
                    'a' => 'Fire pump permits in the Cordelia corridor go through Fairfield-Suisun Fire Department for parcels inside Fairfield city limits, and through Solano County Fire for unincorporated parcels. The boundary runs through active industrial park zones, so Richardson verifies the correct AHJ before every submittal — a critical step that prevents losing 4–6 weeks to a jurisdiction routing error.',
                ],
            ],
            'testimonial' => [
                'quote'   => '',
                'author'  => '',
                'company' => '',
                'project' => '',
            ],
        ],

        // ── YUBA CITY ────────────────────────────────────────────────────────
        'yuba-city' => [
            'name'          => 'Yuba City',
            'slug'          => 'yuba-city',
            'county'        => 'Sutter County',
            'lat'           => 39.1404,
            'lng'           => -121.6169,
            'population'    => 70117,
            'intro'         => 'Yuba City and Sutter County are experiencing steady growth in agricultural processing, healthcare, and residential development. Richardson Fire Protection serves GCs and developers in the Yuba-Sutter market with full-service fire protection design-build, including cold-storage and food-processing fire suppression systems and NFPA 13R multifamily installations coordinated through Yuba City Fire.',
            'building_types' => [
                'Agricultural Processing & Cold Storage',
                'Healthcare & Medical Office',
                'Multifamily & Affordable Housing',
                'Retail & Commercial Strip',
            ],
            'ahj_name'      => 'Yuba City Fire Department',
            'nearby_cities' => [ 'sacramento', 'roseville', 'rocklin', 'davis' ],
            'services_note'  => 'Yuba City Fire Department often coordinates with Sutter County on projects at the city-county boundary. Richardson manages both jurisdictions to ensure correct permit routing from the start.',
            'neighborhoods'  => [ 'Highway 99 Corridor', 'Bridge Street Commercial', 'Plumas Lake', 'Industrial Way', 'Downtown Yuba City', 'Live Oak Adjacent', 'Marysville Adjacent' ],
            'faqs'           => [
                [
                    'q' => 'Does Yuba City require fire sprinklers in multifamily housing?',
                    'a' => 'Yes. California Building Code requires sprinklers in all new multifamily construction. Projects in Yuba City fall under NFPA 13R for buildings up to four stories. Richardson designs and installs 13R systems from permit application through certificate of completion.',
                ],
                [
                    'q' => 'What fire protection is required for agricultural cold-storage facilities in Yuba City?',
                    'a' => 'Cold-storage and agricultural processing facilities require dry-pipe or pre-action sprinkler systems to operate reliably in low-temperature environments. Richardson designs these systems to NFPA 13 including freeze protection and double-interlock pre-action where required.',
                ],
                [
                    'q' => 'Can Richardson handle healthcare fire protection in Yuba City?',
                    'a' => 'Yes. Healthcare occupancies (Group I-2) have specific NFPA 13 quick-response sprinkler requirements and NFPA 72 emergency voice evacuation requirements. Richardson has installed compliant systems in medical facilities throughout Northern California, coordinating with local AHJs including Yuba City FD.',
                ],
                [
                    'q' => 'How does permitting work for projects on the Yuba City / Sutter County boundary?',
                    'a' => 'Jurisdiction depends on whether the parcel falls within city limits or unincorporated Sutter County. We confirm the correct AHJ at project kickoff and submit to the appropriate fire authority to avoid routing errors that delay permit approval.',
                ],
                [
                    'q' => 'What is the drive time from Richardson\'s office to Yuba City job sites?',
                    'a' => 'Richardson\'s office is in Antelope, approximately 35–45 minutes from Yuba City via Highway 99. Our crews are regularly on-site in the Yuba-Sutter area, and emergency response is available 24/7 at (916) 849-6441.',
                ],
                [
                    'q' => 'What fire suppression is required for an agricultural packing facility in Yuba City?',
                    'a' => 'Agricultural packing and processing facilities are typically Group F-1 or H occupancies depending on the materials handled. NFPA 13 systems are required, and cold-chain or refrigerated areas may need dry-pipe or pre-action systems. Richardson evaluates the full occupancy mix and designs a system that meets all applicable hazard classifications.',
                ],
                [
                    'q' => 'What is the permit timeline for a healthcare project in Yuba City?',
                    'a' => 'Healthcare and medical office projects in Yuba City go through Yuba City Fire and may require additional state review under OSHPD (now known as HCAI) for certain occupancy types. Richardson is familiar with this dual-review track and manages both simultaneously. Total permit approval typically runs 6–10 weeks for HCAI-regulated projects.',
                ],
            ],
            'primary_services' => [
                [
                    'icon'     => 'fa-solid fa-industry',
                    'tag'      => 'Industrial',
                    'title'    => 'Agricultural Processing & Cold Storage',
                    'desc'     => 'Specialized fire suppression for Yuba City\'s agricultural processing, packing, and cold-storage facilities along the Highway 99 corridor.',
                    'features' => [ 'Agricultural cold storage systems', 'Ammonia refrigeration suppression', 'CDFA compliance' ],
                    'link'     => '/industrial/',
                ],
                [
                    'icon'     => 'fa-solid fa-hospital',
                    'tag'      => 'Commercial',
                    'title'    => 'Healthcare & Medical Office',
                    'desc'     => 'HCAI-coordinated fire protection for Yuba City\'s healthcare facilities, medical offices, and outpatient clinics in the downtown medical district.',
                    'features' => [ 'HCAI-coordinated healthcare systems', 'Medical office quick-response heads', 'Clinic suppression' ],
                    'link'     => '/commercial/',
                ],
                [
                    'icon'     => 'fa-solid fa-city',
                    'tag'      => 'Multifamily',
                    'title'    => 'Multifamily & Residential Growth',
                    'desc'     => 'NFPA 13R systems for Yuba City\'s expanding residential pipeline, including Plumas Lake and city-county boundary projects in Sutter County.',
                    'features' => [ 'NFPA 13R apartment systems', 'Sutter County permitting', 'City/county boundary projects' ],
                    'link'     => '/residential/',
                ],
            ],
            'local_regulations' => [
                [
                    'code'      => 'Yuba City Municipal Code Chapter 15',
                    'authority' => 'Yuba City Fire Department',
                    'summary'   => 'Adopts the 2022 CFC with local amendments. Yuba City FD has authority within city limits. Some response coverage areas overlap with Sutter County for projects near the city boundary.',
                ],
                [
                    'code'      => 'Sutter County Fire Safe Ordinance',
                    'authority' => 'Sutter County Fire District',
                    'summary'   => 'Governs unincorporated Sutter County. Separate permit process from Yuba City FD. Projects near the city-county boundary must confirm AHJ jurisdiction before submittal — Richardson verifies this on every Yuba-Sutter project.',
                ],
                [
                    'code'      => 'HCAI (Health Care Access and Information)',
                    'authority' => 'California HCAI (formerly OSHPD)',
                    'summary'   => 'Licensed healthcare facilities in the Yuba-Sutter area require HCAI plan review and approval in addition to local AHJ review. HCAI adds 6–10 weeks to the plan review timeline. Richardson manages dual-track submissions.',
                ],
                [
                    'code'      => 'California Department of Food and Agriculture (CDFA)',
                    'authority' => 'CDFA / Yuba City FD',
                    'summary'   => 'Licensed food processing and packing facilities must comply with CDFA fire safety requirements, enforced in conjunction with CFC. Specific requirements apply to ammonia refrigeration systems and grain handling dust suppression.',
                ],
                [
                    'code'      => 'California Title 19 Article 11 — Spray Finishing',
                    'authority' => 'California State Fire Marshal',
                    'summary'   => 'Fire protection requirements for spray finishing operations apply to agricultural equipment manufacturing and finishing facilities in the Yuba City industrial corridor.',
                ],
                [
                    'code'      => 'Yuba-Sutter Air Quality Management District',
                    'authority' => 'YSAQMD',
                    'summary'   => 'Suppression system agents (Halon alternatives, CO2) for large-scale industrial applications require AQMD review. Affects clean agent selection for agricultural cold storage and processing facilities.',
                ],
            ],
            'fire_pump_note' => 'Yuba City Fire Department coordinates with Sutter County Fire on boundary projects — Richardson confirms the correct permitting authority for fire pump submittals before design begins, preventing routing errors that can delay agricultural and healthcare projects by 4–6 weeks.',
            'fire_pump_faqs' => [
                [
                    'q' => 'Do cold-storage agricultural facilities in Yuba City require fire pumps?',
                    'a' => 'Many of Yuba City\'s larger cold-storage and agricultural processing facilities along the Highway 99 corridor require fire pumps because NFPA 13 system demand exceeds available supply pressure. Dry-pipe and pre-action systems — common in refrigerated facilities — have higher pressure losses than wet-pipe systems, increasing the likelihood that a pump is needed. Richardson performs supply analysis for every cold-storage design in the Yuba-Sutter market.',
                ],
                [
                    'q' => 'What fire pump considerations apply to the Yuba City / Sutter County boundary area?',
                    'a' => 'Projects inside Yuba City limits use Yuba City Fire for fire pump permitting; unincorporated Sutter County projects use Sutter County Fire District. The boundary runs through active development zones near Highway 99 and Industrial Way. Richardson confirms jurisdiction at project kickoff — submitting to the wrong AHJ restarts the permit clock and delays agricultural and healthcare projects that typically have strict opening schedules.',
                ],
                [
                    'q' => 'How does NFPA 25 testing for fire pumps work in Sutter County agricultural facilities?',
                    'a' => 'NFPA 25 requires weekly churn tests, annual flow tests, and written performance documentation. For CDFA-regulated food processing facilities in the Yuba City area, fire pump test records are typically required alongside CDFA fire safety inspections. Richardson performs NFPA 25 annual testing and provides written reports for both Yuba City FD compliance and CDFA coordination.',
                ],
                [
                    'q' => 'Can Richardson repair an existing fire pump at a healthcare facility in Yuba City?',
                    'a' => 'Yes. Healthcare facilities in the Yuba City medical district have fire pumps that require NFPA 25 maintenance and periodic repair. Richardson repairs all major pump brands, replaces impellers and mechanical seals, and services fire pump controllers. For HCAI-regulated facilities, repair work may require HCAI notification — we manage that coordination and maintain documentation to the HCAI standard.',
                ],
                [
                    'q' => 'What causes fire pump problems in Yuba City\'s agricultural cold-storage facilities?',
                    'a' => 'The most common issues we see in Sutter County agricultural facilities are seal failure from intermittent dry-running when cold-storage dry-pipe systems cycle during testing, bearing wear from the high humidity inside pump rooms in refrigerated environments, and controller faults from temperature swings. Diesel-drive pumps in cold-storage settings also develop fuel degradation issues if not run on schedule. Richardson offers preventive maintenance contracts and 24/7 emergency response at (916) 849-6441.',
                ],
            ],
            'testimonial' => [
                'quote'   => '',
                'author'  => '',
                'company' => '',
                'project' => '',
            ],
        ],

        // ── DAVIS ─────────────────────────────────────────────────────────────
        'davis' => [
            'name'          => 'Davis',
            'slug'          => 'davis',
            'county'        => 'Yolo County',
            'lat'           => 38.5449,
            'lng'           => -121.7405,
            'population'    => 68464,
            'intro'         => 'Davis is a university city with a growing biotech and research corridor anchored by UC Davis, driving consistent demand for specialized laboratory, research, and mixed-use fire protection scopes. Richardson Fire Protection works with GCs and developers on Davis projects that require close coordination with the Davis Fire Department and — on campus-adjacent projects — with UC Davis Office of Environmental Health and Safety.',
            'building_types' => [
                'Research Laboratory & Biotech',
                'University-Adjacent Mixed-Use',
                'Multifamily & Student Housing',
                'Retail & Community Commercial',
            ],
            'ahj_name'      => 'Davis Fire Department',
            'nearby_cities' => [ 'sacramento', 'fairfield', 'roseville', 'yuba-city' ],
            'services_note'  => 'Davis Fire Department and UC Davis EH&S sometimes have parallel review requirements on campus-adjacent projects. Richardson manages both review tracks simultaneously to prevent schedule conflicts during plan check.',
            'neighborhoods'  => [ 'UC Davis Campus Adjacent', 'Downtown Davis', 'Mace Ranch', 'Cannery District', 'East Davis Research Park', 'South Davis', 'Oeste Ranch', 'Chiles Ranch' ],
            'faqs'           => [
                [
                    'q' => 'What fire protection does a laboratory building in Davis require?',
                    'a' => 'Laboratory occupancies are typically classified as Group B or H depending on chemical storage levels, triggering specific NFPA 13 suppression requirements including deluge or pre-action systems for high-hazard areas. Richardson designs systems that satisfy both Davis FD and UC Davis EH&S requirements.',
                ],
                [
                    'q' => 'Does Davis Fire Department require fire sprinklers in student housing?',
                    'a' => 'Yes. New student housing in Davis is subject to California Residential Code R313 and California Building Code, requiring NFPA 13 or 13R systems depending on building type and height. Richardson installs these systems for student housing developers and GCs in the Davis market.',
                ],
                [
                    'q' => 'How does Richardson handle fire protection for mixed-use buildings near UC Davis?',
                    'a' => 'Mixed-use buildings have multiple occupancy classifications on different floors, each with different NFPA 13 hazard classifications. Richardson engineers a single integrated system that addresses each occupancy correctly and submits a consolidated package to Davis FD for plan review.',
                ],
                [
                    'q' => 'Can Richardson bid research and lab projects before full design documents are available?',
                    'a' => 'Yes. We provide preliminary budget estimates and scope assessments based on schematic drawings or program documents and update the bid as design progresses. This is standard for research lab projects where the GC needs early MEP cost data.',
                ],
                [
                    'q' => 'What is the typical fire sprinkler permit timeline for a Davis project?',
                    'a' => 'Davis Fire Department typically reviews commercial submittals in 3–5 weeks. Richardson submits complete permit packages — including stamped hydraulic calculations, shop drawings, and all required documentation — to minimize the risk of correction cycles.',
                ],
                [
                    'q' => 'How does UC Davis EH&S review differ from the Davis Fire Department permit process?',
                    'a' => 'UC Davis EH&S (Environmental Health and Safety) reviews fire protection systems on campus-owned or campus-adjacent facilities as a parallel track alongside Davis FD. Richardson submits to both simultaneously, managing comments from each reviewer independently to keep the schedule intact.',
                ],
                [
                    'q' => 'What does fire sprinkler installation cost for a Davis biotech or lab building?',
                    'a' => 'Laboratory and research occupancies typically cost more than standard commercial due to special hazard areas, pre-action systems, and clean agent suppression. Budget $5–$10 per sq ft for standard lab areas and $15–$25 for high-hazard or clean-agent zones. Call (916) 849-6441 for a detailed estimate based on your program.',
                ],
            ],
            'primary_services' => [
                [
                    'icon'     => 'fa-solid fa-flask',
                    'tag'      => 'Research & Lab',
                    'title'    => 'Research Laboratory & Biotech',
                    'desc'     => 'Pre-action, clean agent, and NFPA 13 systems for UC Davis-adjacent research labs, biotech facilities, and the East Davis Research Park.',
                    'features' => [ 'Lab pre-action systems', 'Clean agent suppression (FM-200/Novec)', 'UC Davis EH&S coordination' ],
                    'link'     => '/commercial/',
                ],
                [
                    'icon'     => 'fa-solid fa-city',
                    'tag'      => 'Multifamily',
                    'title'    => 'Student Housing & Multifamily',
                    'desc'     => 'NFPA 13R and NFPA 13 systems for Davis\' campus-adjacent student housing, high-density multifamily, and mixed-use residential developments.',
                    'features' => [ 'NFPA 13R student housing', 'CSFM state-building review', 'High-density occupancy design' ],
                    'link'     => '/residential/',
                ],
                [
                    'icon'     => 'fa-solid fa-store',
                    'tag'      => 'Commercial',
                    'title'    => 'Downtown & Neighborhood Retail',
                    'desc'     => 'NFPA 13 commercial systems for Davis\' downtown retail corridor, restaurant row, and neighborhood mixed-use infill projects.',
                    'features' => [ 'Downtown retrofit systems', 'Restaurant hood suppression', 'Light hazard commercial' ],
                    'link'     => '/commercial/',
                ],
            ],
            'local_regulations' => [
                [
                    'code'      => 'Davis Municipal Code Chapter 26',
                    'authority' => 'Davis Fire Department',
                    'summary'   => 'Adopts the 2022 CFC with strict local amendments. Davis requires fire sprinklers in more residential building types than the state minimum, including certain accessory dwelling units (ADUs) above thresholds set by local ordinance.',
                ],
                [
                    'code'      => 'Yolo County Fire and Life Safety',
                    'authority' => 'Yolo County Fire District',
                    'summary'   => 'Governs unincorporated Yolo County, including the UC Davis Research Park areas outside city limits. Separate permit authority from Davis FD for projects outside the city boundary.',
                ],
                [
                    'code'      => 'UC Davis EH&S Fire Safety Program',
                    'authority' => 'UC Davis Environmental Health & Safety',
                    'summary'   => 'All construction on the UC Davis campus requires EH&S review and approval independent of — and in addition to — Davis FD or CSFM review. UC campus buildings are state-owned; CSFM is the primary AHJ, not the City of Davis.',
                ],
                [
                    'code'      => 'CSFM — State-Owned Buildings',
                    'authority' => 'California State Fire Marshal',
                    'summary'   => 'Buildings owned by UC Davis and other state agencies use CSFM as the AHJ, not the local city fire department. This creates a separate plan review track with different submittal requirements and longer timelines.',
                ],
                [
                    'code'      => 'Davis Sustainability & Green Building Code',
                    'authority' => 'City of Davis',
                    'summary'   => 'Davis has adopted aggressive green building standards that affect material selection for fire suppression systems. Certain pipe materials and suppression agents require environmental compatibility review per Davis Municipal Code.',
                ],
                [
                    'code'      => 'HCAI for Licensed Healthcare Facilities',
                    'authority' => 'California HCAI',
                    'summary'   => 'Any Davis satellite clinics licensed as healthcare facilities require HCAI plan review in addition to local AHJ review. Richardson manages dual-track submissions and tracks both review timelines simultaneously.',
                ],
            ],
            'fire_pump_note' => 'Campus-adjacent Davis projects may require fire pump submittals to Davis Fire Department and UC Davis EH&S simultaneously; state-owned UC buildings use CSFM as the primary AHJ instead of Davis FD — Richardson identifies the correct review track at project kickoff to prevent schedule-damaging misrouting.',
            'fire_pump_faqs' => [
                [
                    'q' => 'Do research labs and biotech facilities near UC Davis require fire pumps?',
                    'a' => 'Research laboratory and biotech buildings are among the most pump-requiring building types in the Davis market. High-hazard lab areas may require deluge or pre-action systems with large hydraulic demands, and multi-story biotech buildings place sprinkler risers well above ground-floor water supply. Richardson performs supply analysis for every Davis lab project at the schematic design phase — before structural documents are issued.',
                ],
                [
                    'q' => 'How does fire pump permitting work for state-owned UC Davis buildings — CSFM vs. Davis FD?',
                    'a' => 'State-owned UC Davis buildings use the California State Fire Marshal (CSFM) as the AHJ — not Davis Fire Department. Fire pump submittals go to CSFM, which has separate submittal requirements and longer review timelines (8–12 weeks vs. 3–5 weeks for Davis FD). Campus-adjacent private buildings use Davis FD with an optional UC Davis EH&S advisory review. Richardson identifies the correct AHJ at project kickoff every time.',
                ],
                [
                    'q' => 'How often are fire pumps tested in Yolo County under NFPA 25?',
                    'a' => 'NFPA 25 requires weekly churn tests, annual flow tests, and written performance documentation — enforced in Yolo County under SB 1205. For state-owned UC Davis facilities, CSFM enforces inspection record certification. Richardson provides NFPA 25 testing contracts and delivers written reports for both Davis FD and CSFM compliance.',
                ],
                [
                    'q' => 'Can Richardson repair fire pumps in active laboratory environments at UC Davis-adjacent buildings?',
                    'a' => 'Yes, and we understand the sensitivities of working inside research environments — we coordinate system isolation windows with building operations staff, maintain air quality during repair work, and restore systems to full service before leaving. For UC Davis-regulated buildings, we notify the EH&S contact and document the repair to CSFM record-keeping standards.',
                ],
                [
                    'q' => 'Does Davis\'s green building code affect fire pump material selection or suppression agent choice?',
                    'a' => 'Davis\'s sustainability code adds environmental review for certain fire suppression agents, particularly HFC-based clean agents used near pump control panels or server rooms in biotech facilities. Richardson selects agents compatible with the Davis Municipal Code environmental ordinance. Standard fire pump components — steel pipe, cast iron pump housing, bronze fittings — are not affected by the green building code.',
                ],
            ],
            'testimonial' => [
                'quote'   => '',
                'author'  => '',
                'company' => '',
                'project' => '',
            ],
        ],

    ]; // end rfp_all_locations()
}
