@extends('layouts.app')

@section('content')
    <div id="home" class="home-section">
        <div class="container">
            <h1 class="hi-there">HI, THERE!</h1>
            <h2 class="name">Jefferson <br>Mourent</h2>
            <h1 class="job">Software Developer</h1>
            <a href="#contact" class="contact-btn">Contact Me</a>
        </div>
    </div>

    <div id="about" class="about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 about-image-container">
                    <img src="{{ asset('images/about.svg') }}" alt="Personal Brand Jefferson Mourent" class="about-image">
                </div>
                <div class="col-md-6 about-content">
                    <p class="about-btn">About</p>
                    <h1 class="section-title">More About Me</h1>
                    <p class="about-description">
                        Hello! <span class="about-highlight"> I'm Jefferson Mourent, a web developer </span> based in Indonesia. I'm very passionate about the work that I do.
                    </p>
                    <p class="about-description">
                        I specializing in <span class="about-highlight"> Laravel with PHP </span> . My expertise includes building scalable and efficient web applications, creating responsive and user-friendly designs, and ensuring optimal performance for web-based systems.
                    </p>
                    <p class="about-description">
                        I am continuously learning and growing in the field of web development to <span class="about-highlight"> deliver innovative and effective solutions.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="experience-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 experience-description">
                    <h1 class="section-title">My Experience</h1>
                    <p class="experience-intro">
                        I have had the pleasure to work with companies across a variety of industries. I'm always interested in new, exciting and challenging adventures
                    </p>
                    <img src="{{ asset('images/experience.svg') }}" alt="Jefferson Mourent Experience" class="experience-image img-fluid">
                </div>
                <div class="col-md-6 experience-timeline">
                    <div class="row">
                        <div class="col-md-4 timeline-left">
                            <div class="timeline-content">
                                <p>Feb '25 - Present</p>
                            </div>
                            <div class="timeline-content">
                                <p>Feb '24 - Dec '24</p>
                            </div>
                        </div>
                        <div class="col-md-1 timeline-center">
                            <div class="timeline-line">
                                <div class="timeline-dot"></div>
                                <div class="timeline-dot"></div>
                            </div>
                        </div>
                        <div class="col-md-7 timeline-right">
                            <div class="timeline-content">
                                <h3>IT Support at PT. BPR Sili Corp Bank</h3>
                                <p>Responsible for developing a Laravel-based website system to support the company's staff operations. This system is designed to enhance the company's work efficiency.</p>
                            </div>
                            <div class="timeline-content">
                                <h3>iOS Developer at Apple Developer Academy</h3>
                                <p>Developing applications using Swift and SwiftUI. In addition to coding, I am also involved in brainstorming, user research, and product iteration based on feedback.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portofolio" class="portfolio-section">
        <div class="container-fluid">
            <div class="portfolio-header">
                <span class="portfolio-tag">MY PORTFOLIO</span>
                <h1 class="portfolio-title">Check Out Some Of<br>My Portfolio</h1>
            </div>
            
            <div class="row portfolio-items">
                <div class="col-md-6 portfolio-item">
                    <div class="portfolio-card">
                        <div class="portfolio-screenshot">
                            <img src="/public/images/pos-toko-ramai.png" alt="Toko Ramai POS">
                        </div>
                        <div class="portfolio-details">
                            <h3>Point Of Sales For Toko Ramai</h3>
                            <p>Developed a POS application using Laravel and MySQL, ensuring efficient transaction processing, stock opname, and data management with a focus on performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 portfolio-item">
                    <div class="portfolio-card">
                        <div class="portfolio-screenshot">
                            <img src="/public/images/pos-toko-ramai.png" alt="Toko Ramai POS">
                        </div>
                        <div class="portfolio-details">
                            <h3>Point Of Sales For Toko Ramai</h3>
                            <p>Developed a POS application using Laravel and MySQL, ensuring efficient transaction processing, stock opname, and data management with a focus on performance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-section">
        <div class="container">
            <h1 class="about-title">Contact</h1>
            <p class="about-description">
            I'm a passionate Software Developer with a keen eye for creating innovative and efficient solutions. My expertise lies in developing robust web applications and solving complex technical challenges.
            </p>
            <p class="about-description">
            I'm a passionate Software Developer with a keen eye for creating innovative and efficient solutions. My expertise lies in developing robust web applications and solving complex technical challenges.
            </p>
            <p class="about-description">
            I'm a passionate Software Developer with a keen eye for creating innovative and efficient solutions. My expertise lies in developing robust web applications and solving complex technical challenges.
            </p>
            <p class="about-description">
            I'm a passionate Software Developer with a keen eye for creating innovative and efficient solutions. My expertise lies in developing robust web applications and solving complex technical challenges.
            </p>
            <p class="about-description">
            I'm a passionate Software Developer with a keen eye for creating innovative and efficient solutions. My expertise lies in developing robust web applications and solving complex technical challenges.
            </p>
            <p class="about-description">
            I'm a passionate Software Developer with a keen eye for creating innovative and efficient solutions. My expertise lies in developing robust web applications and solving complex technical challenges.
            </p>
            <p class="about-description">
            I'm a passionate Software Developer with a keen eye for creating innovative and efficient solutions. My expertise lies in developing robust web applications and solving complex technical challenges.
            </p>
            <p class="about-description">
            I'm a passionate Software Developer with a keen eye for creating innovative and efficient solutions. My expertise lies in developing robust web applications and solving complex technical challenges.
            </p>
            <p class="about-description">
            I'm a passionate Software Developer with a keen eye for creating innovative and efficient solutions. My expertise lies in developing robust web applications and solving complex technical challenges.
            </p>
            <p class="about-description">
            I'm a passionate Software Developer with a keen eye for creating innovative and efficient solutions. My expertise lies in developing robust web applications and solving complex technical challenges.
            </p>
        </div>
    </div>
@endsection