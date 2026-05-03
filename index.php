<?php include('header.php'); ?>

    <section class="relative flex items-center px-6 md:px-16" style="min-height: 85vh;">
        <div class="absolute inset-0 z-0">
            <img src="hero-salmon.png" alt="Fresh whole salmon" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-r from-[#041611]/95 via-[#041611]/80 to-[#041611]/30"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#041611] via-transparent to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-2xl pt-16 pb-16">
            <div class="inline-flex items-center gap-2 bg-[#c5a059]/15 border border-[#c5a059]/30 rounded-full px-4 py-2 mb-8">
                <span class="w-2 h-2 rounded-full bg-[#c5a059] animate-pulse"></span>
                <span class="text-[#c5a059] text-xs font-bold tracking-widest uppercase">2026 Cohort — Limited to 6 Seats</span>
            </div>
            <h1 class="text-5xl md:text-7xl mb-6 leading-[1.1]">
                Learn Korean<br><span class="italic font-light text-[#c5a059]">Culinary Craft</span><br>in South Korea<br><span class="text-3xl md:text-4xl font-light text-slate-300">— and earn your Certificate</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 font-light mb-4 leading-relaxed">
                A hands-on 3-day immersion into Korean fermentation, aging, and cooking — guided personally by Chef Lee Tak in Yangsan, South Korea.
            </p>
            <p class="text-slate-400 text-base font-light mb-10">
                No experience required. Just curiosity and a love for real food.
            </p>
            <div class="flex flex-wrap gap-6 mb-10 text-sm text-slate-300">
                <div class="flex items-center gap-2"><span class="text-[#c5a059]">✓</span> Small group (max 6)</div>
                <div class="flex items-center gap-2"><span class="text-[#c5a059]">✓</span> Hands-on every day</div>
                <div class="flex items-center gap-2"><span class="text-[#c5a059]">✓</span> Taught by Chef Lee Tak</div>
                <div class="flex items-center gap-2"><span class="text-[#c5a059]">✓</span> Certificate included</div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#apply" class="btn-gold px-10 py-4 rounded-full text-base font-bold text-center">Reserve My Spot →</a>
                <a href="#tracks" class="glass px-10 py-4 rounded-full text-base font-bold text-center hover:bg-white/5 transition">See What You'll Learn</a>
            </div>
        </div>
    </section>

    <section id="logic" class="pt-0 pb-12 px-8 max-w-7xl mx-auto">
        <div class="flex items-center gap-6 mb-12">
            <div class="h-16 w-24 rounded-lg overflow-hidden flex-shrink-0">
                <img src="salmon-cutting.png" alt="Salmon craft" class="w-full h-full object-cover">
            </div>
            <div>
                <p class="text-[#c5a059] text-xs font-bold tracking-widest uppercase mb-1">The Craft</p>
                <h2 class="text-2xl md:text-3xl font-bold">What You'll Master</h2>
            </div>
        </div>
        <div class="grid lg:grid-cols-3 gap-16">
            <div class="group">
                <div class="h-px w-full bg-white/10 mb-8 group-hover:bg-[#c5a059] transition-colors duration-500"></div>
                <h3 class="text-[#c5a059] text-xs font-bold tracking-widest uppercase mb-4">01. Breakdown & Craft</h3>
                <h4 class="text-2xl font-bold mb-6">From whole to nothing wasted.</h4>
                <p class="text-slate-400 font-light leading-relaxed">Master the art of breaking down whole salmon and chicken — understanding muscle structure, aging potential, and zero-waste utilization from the first cut to the final dish. Including Korean-style skewering and charcoal grilling technique.</p>
            </div>
            <div class="group">
                <div class="h-px w-full bg-white/10 mb-8 group-hover:bg-[#c5a059] transition-colors duration-500"></div>
                <h3 class="text-[#c5a059] text-xs font-bold tracking-widest uppercase mb-4">02. Fermentation & Aging</h3>
                <h4 class="text-2xl font-bold mb-6">Time is the ingredient.</h4>
                <p class="text-slate-400 font-light leading-relaxed">Learn the science behind Korean fermentation — salmon aging through salt-curing (Shiojime), kelp-pressing (Kombujime), and Scandinavian dry-cure (Gravlax), each reinterpreted through a Korean lens. Master Ganjang-based preservation and the craft of Yeoneojang and Saeujang.</p>
            </div>
            <div class="group">
                <div class="h-px w-full bg-white/10 mb-8 group-hover:bg-[#c5a059] transition-colors duration-500"></div>
                <h3 class="text-[#c5a059] text-xs font-bold tracking-widest uppercase mb-4">03. The Korean Table</h3>
                <h4 class="text-2xl font-bold mb-6">Roots, season, and tradition.</h4>
                <p class="text-slate-400 font-light leading-relaxed">Explore the foundation of Korean culinary tradition — seasonal namul, kimchi, and banchan through a plant-based lens. Fermentation as a daily practice, not a trend.</p>
            </div>
        </div>
    </section>

    <section id="chef" class="py-24 px-8 bg-[#03110d] border-y border-white/5">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-20 items-center">
            <div class="relative">
                <img src="chef-portrait.jpg" class="rounded shadow-2xl sepia-effect w-full aspect-[4/5] object-cover" alt="Chef Lee Tak">
                <div class="absolute -bottom-6 -right-6 glass p-6 rounded-lg hidden md:block text-center">
                    <p class="text-xs font-bold text-[#c5a059] uppercase tracking-widest mb-1">Logic Practitioner</p>
                    <p class="text-2xl italic chef-name">Chef Lee Tak</p>
                </div>
            </div>
            <div class="space-y-8">
                <h2 class="text-5xl leading-tight">From military kitchen to culinary craft.</h2>
                <p class="text-slate-400 font-light text-xl leading-relaxed">Two years cooking for the Korean military. Then professional kitchens in Seoul. Then three restaurants of his own. His focus: salmon, chicken, and the fermentation logic he grew up watching his mother practice.</p>
                <div class="space-y-6 text-sm text-slate-300">
                    <p><span class="text-[#c5a059] font-bold uppercase tracking-tighter mr-2">01.</span> <span class="font-bold">The Military Foundation:</span> Discipline, consistency, no waste.</p>
                    <p><span class="text-[#c5a059] font-bold uppercase tracking-tighter mr-2">02.</span> <span class="font-bold">The Restaurant Years:</span> Salmon, chicken, fermentation — across three self-run kitchens.</p>
                    <p><span class="text-[#c5a059] font-bold uppercase tracking-tighter mr-2">03.</span> <span class="font-bold">The Local Legacy:</span> His mother's kitchen. Seasonal vegetables, kimchi, banchan the traditional way.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="tracks" class="py-24 px-8 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl mb-4 font-bold uppercase tracking-widest">Certification Tracks</h2>
            <p class="text-slate-400 font-light">Complete any track and receive your <span class="text-[#c5a059] font-semibold">Certificate of Korean Culinary Mastery</span></p>
            <div class="h-1 w-24 bg-[#c5a059] mx-auto mt-6"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-12">
            <div class="glass p-12 rounded-xl text-center">
                <h4 class="text-2xl font-bold mb-2">Korean Culinary Intensive</h4>
                <p class="text-[#c5a059] text-sm font-bold tracking-widest mb-6 uppercase">3 DAYS</p>
                <p class="text-slate-400 text-sm font-light mb-6 italic">Breakdown · Aging · Zero-Waste Mastery</p>
                <div class="inline-flex items-center gap-2 bg-[#c5a059]/10 border border-[#c5a059]/30 rounded-full px-4 py-2 mb-8">
                    <span class="text-[#c5a059] text-xs">🎓</span>
                    <span class="text-[#c5a059] text-xs font-bold tracking-wider uppercase">Certificate of Korean Culinary Mastery</span>
                </div>
                <br>
                <a href="#apply" class="text-xs uppercase tracking-widest font-bold border-b border-[#c5a059] pb-1 hover:text-white transition">Reserve My Spot →</a>
            </div>
            <div class="glass p-12 rounded-xl text-center">
                <h4 class="text-2xl font-bold mb-2">Korean Vegan Table</h4>
                <p class="text-[#c5a059] text-sm font-bold tracking-widest mb-6 uppercase">3 DAYS</p>
                <p class="text-slate-400 text-sm font-light mb-6 italic">Roots · Season · Tradition</p>
                <div class="inline-flex items-center gap-2 bg-[#c5a059]/10 border border-[#c5a059]/30 rounded-full px-4 py-2 mb-8">
                    <span class="text-[#c5a059] text-xs">🎓</span>
                    <span class="text-[#c5a059] text-xs font-bold tracking-wider uppercase">Certificate of Korean Culinary Mastery</span>
                </div>
                <br>
                <a href="#apply" class="text-xs uppercase tracking-widest font-bold border-b border-[#c5a059] pb-1 hover:text-white transition">Reserve My Spot →</a>
            </div>
        </div>
    </section>

    <section id="apply" class="py-24 px-8 max-w-4xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold uppercase mb-4">Request Placement</h2>
            <p class="text-slate-400 font-light mb-2">Cohort Size: Max 6 participants for personalized technical feedback.</p>
            <p class="text-[#c5a059] text-sm font-semibold">🎓 All participants receive a Certificate of Korean Culinary Mastery upon completion.</p>
        </div>
        <form action="https://formspree.io/f/xnjwjgzz" method="POST" class="space-y-8 glass p-12 rounded-lg">
            <div class="grid md:grid-cols-2 gap-8">
                <input type="text" name="name" class="input-field" placeholder="Full Name" required>
                <input type="text" name="establishment" class="input-field" placeholder="Establishment" required>
            </div>
            <input type="email" name="email" class="input-field" placeholder="Email Address" required>
            <select name="track" class="input-field appearance-none" required>
                <option value="Culinary Intensive">Korean Culinary Intensive (3 Days)</option>
                <option value="Vegan Table">Korean Vegan Table (3 Days)</option>
            </select>
            <textarea name="background" rows="4" class="input-field" placeholder="Briefly describe your culinary background..."></textarea>
            <button type="submit" class="btn-gold w-full py-5 rounded text-sm font-bold uppercase tracking-widest">Submit for Review</button>
        </form>
    </section>

<?php include('footer.php'); ?>
