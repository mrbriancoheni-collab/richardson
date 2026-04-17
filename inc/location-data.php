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
            'services_note' => 'SCFD Fire Prevention Division handles plan review. Richardson submits stamped hydraulic calculations and shop drawings directly and coordinates all required pre-final walkthroughs.',
            'faqs'          => [
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
            'services_note' => 'Stockton Fire Department requires commodity classification documentation for high-piled storage projects. Richardson provides complete storage analysis and ESFR design packages that clear SFD plan check without corrections.',
            'faqs'          => [
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
            'services_note' => 'Roseville Fire Department plan review currently runs 3–4 weeks for commercial projects. Richardson submits complete permit packages including hydraulic calculations and CAD shop drawings to minimize correction cycles.',
            'faqs'          => [
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
            'services_note' => 'Rocklin Fire Department plan review is handled through Placer County for projects in unincorporated areas. Richardson navigates both City of Rocklin and Placer County permitting depending on project location.',
            'faqs'          => [
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
            'services_note' => 'Fairfield Fire Department has specific requirements for projects within proximity to Travis AFB that may involve coordination with base fire protection officers. Richardson has navigated this dual-AHJ process on prior Solano County projects.',
            'faqs'          => [
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
            ],
        ],
