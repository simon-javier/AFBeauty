<main class="min-h-dvh">
    <section class="h-dvh relative">
        <img src="{{ asset('images/hero_img.png') }}"
            class=" -z-100 w-full fixed h-full grayscale inset-0 object-[50%_40%] object-cover" alt="">
        <div class="fixed inset-0 bg-radial-[at_0%_100%] from-primary/40 to-dark/80 -z-99"></div>
        <div class="flex flex-col items-center h-full justify-center text-center gap-2 wrapper">
            <h1 class="text-5xl sm:text-6xl md:text-7xl xl:text-8xl w-10/12 max-w-xl">THE ART OF RADIANCE</h1>
            <p class="font-light md:text-lg xl:text-xl text-balance max-w-xl">Elevating beauty through precision and
                passion.
                A bespoke experience tailored for bridal, editorial, and high-fashion excellence.</p>
            <div class="flex flex-col justify-center gap-4 md:gap-8 sm:flex-row mt-12 sm:mt-2 lg:mt-8">
                <a href="https://www.facebook.com/ahzalea0777"
                    class="uppercase tracking-[1.2px] px-10 py-4 font-semibold bg-accent hover:bg-[#F5D9FF] transition-colors duration-300 text-tertiary">Book
                    a Session</a>
                <a href="{{ route('gallery') }}"
                    class="uppercase tracking-[1.2px] px-10 py-4 font-semibold border-2 border-accent/30 btn-animation after:bg-white after:outline-white after:outline-2 gallery-btn">View
                    Gallery</a>
            </div>
        </div>
    </section>
    <section class="py-10 md:py-20 xl:py-30 bg-dark">
        <div class="wrapper">
            <div class="flex gap-4 flex-col sm:flex-row-reverse items-center">
                <div class="flex flex-1 flex-col gap-4">
                    <h2 class="uppercase text-accent tracking-[3.6px] text-xs font-sans font-semibold">The Artist</h2>
                    <h3 class="text-5xl">Meet Aleah</h3>
                    <p class="font-light">I am an aspiring makeup artist who loves to create a "luminous glow" for my
                        clients. My work focuses on everyday beauty and looks for special events.</p>
                    <p class="font-light">Right now, I am working on building my portfolio, and I bring a fresh and
                        modern style to every session. I see every face as a new chance to improve my skills and create
                        a look that is truly unique.</p>
                    <livewire:divider width="96px" class="my-4" />
                    <div class="flex gap-8 md:gap-16">
                        <div>
                            <p class="font-serif text-accent text-2xl font-normal smallcaps">Best</p>
                            <p class="uppercase text-xs font-semibold tracking-[1.8px]">Quality Looks</p>
                        </div>
                        <div>
                            <p class="font-serif text-accent text-2xl font-normal smallcaps">Fair</p>
                            <p class="uppercase text-xs font-semibold tracking-[1.8px]">Budget Rates</p>
                        </div>
                    </div>
                </div>
                <div class="relative flex-1 overflow-hidden flex justify-center">
                    <img src="{{ asset('images/aleah.png') }}"
                        class="max-h-115 object-contain border-accent/20 border object-[50%_10%] p-4" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
