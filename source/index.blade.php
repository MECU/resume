@extends('_layouts.master')

@section('body')
<div id="cv">
    <div class="mainDetails">
        <div id="headshot">
            <img src="/assets/images/headshot.jpg" alt="Michael Hoppes"/>
        </div>

        <div id="name">
            <h1>Michael Raymond Hoppes</h1>
            <h2>Software Engineer</h2>
        </div>

        <div id="contactDetails">
            <ul>
                <li>e: <a href="mailto:hoppes@gmail.com" target="_blank">hoppes@gmail.com</a></li>
                <li>w: <a href="/">michaelhoppes.com</a></li>
                <li>m: 303-947-5478</li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>

    <div id="mainArea">
        <section>
            <article>
                <div class="sectionContent">
                    <ul class="nolist">
                        <li>Better is the enemy of good enough</li>
                        <li>Solve real problems, don't just provide solutions</li>
                        <li>Get a project done on-time and meet all requirements</li>
                    </ul>
                </div>
            </article>
            <div class="clear"></div>
        </section>

        <section>
            <div class="sectionTitle">
                <h1>Experience</h1>
            </div>

            <div class="sectionContent">
                <article>
                    <h2>Software Engineer, Background Check Team</h2>
                    <h3><a href="https://checkr.com">Checkr</a></h3>

                    <p class="subDetails">August 2019 &mdash; Present</p>
                    <ul>
                        <li>Ruby on Rails</li>                
                        <li>Collaborating with peers to brainstorm ideas to improve report accuracy and reliability - this involves white-boarding, sending out RFCs, and running architecture spike sessions with the team.</li>
                        <li>Build new features on the core background check product and testing them.</li>
                        <li>Contribute to internal tooling to help improve workflows and increase efficiency.</li>
                        <li>Help identify, triage, and solve bugs.</li>
                        <li>Demo work to team during weekly sprint retrospectives.</li>
                </article>
            </div>

            <div class="sectionContent">
                <article>
                    <h2>Software Engineer</h2>
                    <h3><a href="https://i3logix.com">i3logix</a></h3>

                    <p class="subDetails">July 2018 &mdash; August 2019</p>
                    <ul>
                        <li>PHP 7.1+, Zend Framework combined with Expressive, EXT.JS, Jasper, JIRA, git</li>
                        <li>Manage scalability of legacy codebase while enabling longevity by eliminating technical restrictions</li>
                        <li>Design and begin implementation to replace legacy system using modern architectures</li>
                        <li>Perform and recommend software frameworks, packages and processes</li>
                        <li>Perform code reviews on peer pull requests as-required</li>
                        <li>Support off-hours deployment releases on a rotating schedule</li>
                </article>
            </div>

            <div class="sectionContent">
                <article>
                    <h2>Software Developer III (Senior)</h2>
                    <h3><a href="https://realpage.com">RealPage</a> (formerly The Rainmaker Group)</h3>

                    <p class="subDetails">July 2017 &mdash; July 2018</p>
                    <ul>
                        <li>Laravel, JavaScript, JIRA, AWS</li>
                        <li>Help shape and implement new features within the Rainmaker ILM product suite working with developers, designers, product owners,
                            sales and support
                        </li>
                        <li>Integrate with in-house and third-party applications through REST and SOAP APIs</li>
                    </ul>
                </article>
            </div>

            <div class="sectionContent">
                <article>
                    <h2>PHP Developer</h2>
                    <h3><a href="https://transitivemedia.com">TransitiveMedia</a></h3>

                    <p class="subDetails">October 2016 &mdash; July 2017</p>
                    <ul>
                        <li>Part of a small creative team that was responsible for all aspects of the ongoing and new software development and maintenance of IP
                            software, system maintenance, and client requests (internal and external clients)
                        </li>
                        <li>Application based on Laravel, Eloquent, MySQL, Blade, PHP 7+, HTML5, CSS3, Vue.JS</li>
                        <li>Full-Stack Development from database design to CSS with Bootstrap</li>
                        <li>Build and consume internal RESTful API, OAuth 2.0, Access Control</li>
                        <li>Git repository and branch source code management</li>
                    </ul>
                </article>
            </div>

            <div class="sectionContent">
                <article>
                    <h2>PHP Web Application Developer</h2>
                    <h3><a href="https://wiland.com">Wiland</a></h3>

                    <p class="subDetails">April 2015 &mdash; October 2016</p>
                    <ul>
                        <li>Worked closely with the Development Team Lead, Product Management team and other developers
                            to define, design, build and maintain consumer-facing web based application
                        </li>
                        <li>Integrated with Cloudinary API, Twitter Bootstrap Carousel</li>
                        <li>Asynchronous AJAX loading of content, Handlebars JS</li>
                        <li>Application based on Symfony 2/3 with Doctrine 2, MySQL, Twig, PHP 7</li>
                        <li>Write automated test cases with PHPUnit, Selenium & Mink</li>
                    </ul>
                </article>
            </div>
            <div class="clear"></div>
        </section>

        <section>
            <div class="sectionTitle">
                <h1>Projects</h1>
            </div>

            <div class="sectionContent">
                <article>
                    <h2><a href="https://rockyprep.com/">RockyPrep.com</a></h2>
                    <p class="subDetails">Launched: September 2008</p>
                    <ul>
                        <li>Creates, automatically updates and calculates standings and RPI for high school football
                            teams in the United States
                        </li>
                        <li>Laravel, jQuery, JavaScript (JS), Twitter Bootstrap</li>
                        <li>LAMP stack: Linux, Apache2, MySQL, and PHP 7.1</li>
                        <li>Integrates with Twitter API to tweet results</li>
                    </ul>
                </article>
            </div>

            <div class="sectionContent">
                <article>
                    <h2><a href="https://tractrak.com">TracTrak.com</a></h2>
                    <p class="subDetails">Launched: January 2016</p>
                    <p>The website provides real-time results of track time for track meets from the
                        <a href="http://finishlynx.com">FinishLynx</a> Fully-Automated-Timing system.</p>
                    <ul>
                        <li>Takes output of fully automated timing system and pushes notifications through Pusher.com via
                            websockets to update data without refreshing web page
                        </li>
                        <li>Wrote Golang executable to monitor directory for file changes and send to server with
                            built-in automatic retries
                        </li>
                        <li>Laravel, Vue.JS, Twitter Bootstrap</li>
                        <li>LAMP stack: Linux, Apache2, MySQL, and PHP 7.1</li>
                    </ul>
                </article>
            </div>
            <div class="clear"></div>
        </section>

        <section id="skills">
            <div class="sectionTitle">
                <h1>Key Skills</h1>
            </div>

            <div class="sectionContent">
                <ul class="keySkills">
                    <li class="skill">
                        <div class="chart">
                            <canvas id="php"></canvas>
                        </div>

                        <div class="details">
                            <p>PHP</p>

                            <p>2004-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="mysql"></canvas>
                        </div>

                        <div class="details">
                            <p>MySQL</p>

                            <p>2008-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="vue"></canvas>
                        </div>

                        <div class="details">
                            <p>Vue.js</p>

                            <p>2016-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="js"></canvas>
                        </div>

                        <div class="details">
                            <p>JavaScript</p>

                            <p>2004-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="jquery"></canvas>
                        </div>

                        <div class="details">
                            <p>jQuery</p>

                            <p>2010-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="cpp"></canvas>
                        </div>

                        <div class="details">
                            <p>C++</p>

                            <p>2014-2015</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="oop"></canvas>
                        </div>

                        <div class="details">
                            <p>OOP</p>

                            <p>2011-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="bootstrap"></canvas>
                        </div>

                        <div class="details">
                            <p>Bootstrap</p>

                            <p>2013-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="html5"></canvas>
                        </div>

                        <div class="details">
                            <p>HTML5</p>

                            <p>1998-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="css"></canvas>
                        </div>

                        <div class="details">
                            <p>CSS</p>

                            <p>2008-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="composer"></canvas>
                        </div>

                        <div class="details">
                            <p>composer</p>

                            <p>2013-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="git"></canvas>
                        </div>

                        <div class="details">
                            <p>git</p>

                            <p>2013-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="symfony"></canvas>
                        </div>

                        <div class="details">
                            <p>Symfony 2/3</p>

                            <p>2015-2016</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="doctrine"></canvas>
                        </div>

                        <div class="details">
                            <p>Doctrine</p>

                            <p>2015-2016</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="bitbucket"></canvas>
                        </div>

                        <div class="details">
                            <p>BitBucket</p>

                            <p>2013-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="laravel"></canvas>
                        </div>

                        <div class="details">
                            <p>Laravel</p>

                            <p>2013-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="querypath"></canvas>
                        </div>

                        <div class="details">
                            <p>QueryPath</p>

                            <p>2010-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="twitterapi"></canvas>
                        </div>

                        <div class="details">
                            <p>Twitter API</p>

                            <p>2010-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="rest"></canvas>
                        </div>

                        <div class="details">
                            <p>REST</p>

                            <p>2014-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="eloquent"></canvas>
                        </div>

                        <div class="details">
                            <p>Eloquent ORM</p>

                            <p>2013-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="aws"></canvas>
                        </div>

                        <div class="details">
                            <p>AWS</p>

                            <p>2014-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="golang"></canvas>
                        </div>

                        <div class="details">
                            <p>Go</p>

                            <p>2017-2018</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="zend"></canvas>
                        </div>

                        <div class="details">
                            <p>Zend</p>

                            <p>2018-Present</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="chart">
                            <canvas id="python"></canvas>
                        </div>

                        <div class="details">
                            <p>Python</p>

                            <p>2018-Present</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </section>
        <section>
            <div class="sectionTitle">
                <h1>Social</h1>
            </div>

            <div class="sectionContent">
                <div><a href="https://stackexchange.com/users/30787/mecu"><img
                                src="https://stackexchange.com/users/flair/30787.png" width="208" height="58"
                                alt="profile for MECU on Stack Exchange" title="profile for MECU on Stack Exchange"/></a>
                </div>
                <div>
                    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
                    <div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="en_US" data-type="horizontal" data-theme="light" data-vanity="hoppes">
                    <a class="LI-simple-link" href='https://www.linkedin.com/in/hoppes?trk=profile-badge'>Michael Hoppes @ LinkedIn</a>
                    </div>
                </div>
                <div>
                    <iframe src="https://githubbadge.appspot.com/MECU?a=0"
                            style="border: 0;height: 142px;width: 200px;overflow: hidden;" frameBorder="0"></iframe>
                </div>
            </div>
            <div class="clear"></div>
        </section>

        <section>
            <div class="sectionTitle">
                <h1>Tests</h1>
            </div>

            <div class="sectionContent">
                <ul class="keySkills">
                    <li>
                        <img src="/assets/images/Ruby_SoloLearn_TestCert.jpg" height="180px" />
                    </li>
                    <script>
                        var stylesheet = "https://www.testdome.com/content/source/stylesheets/embed.css",
                            link = document.createElement("link");
                        link.href = stylesheet, link.type = "text/css", link.rel = "stylesheet", link.media = "screen,print", document.getElementsByTagName("head")[0].appendChild(link);
                    </script>
                    <li>
                        <a href="https://www.testdome.com/cert/ebc6fc0a57f1493bb903560af1e6b556"
                           class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-name">Michael Hoppes</span>
                            <span class="testdome-certificate-test-name">PHP</span>
                            <span class="testdome-certificate-card-logo">TestDome<br/>Certificate</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.testdome.com/cert/8d90e080467b4dfe81402d865b9a8005"
                           class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-name">Michael Hoppes</span>
                            <span class="testdome-certificate-test-name">PHP (Hard)</span>
                            <span class="testdome-certificate-card-logo">TestDome<br/>Certificate</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.testdome.com/cert/6d8701d0c13547af8bca47eb26f24009"
                           class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-name">Michael Hoppes</span>
                            <span class="testdome-certificate-test-name">PHP and SQL</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.testdome.com/cert/62e99b8524244eb8b429df841ec7bff1"
                           class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-name">Michael Hoppes</span>
                            <span class="testdome-certificate-test-name">PHP and SQL (Hard)</span>
                            <span class="testdome-certificate-card-logo">TestDome<br/>Certificate</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </section>

        <section>
            <div class="sectionTitle">
                <h1>Education</h1>
            </div>

            <div class="sectionContent">
                <article>
                    <h2>Oregon State University</h2>
                    <p class="subDetails">2015</p>
                    <p class="subDetails">Coursework in Computer Science</p>
                </article>

                <article>
                    <h2>University of Colorado at Boulder</h2>
                    <p class="subDetails">1999 &mdash; 2004</p>
                    <p class="subDetails">Master of Science (Mechanical Engineering)</p>
                    <p class="subDetails">Bachelor of Science (Mechanical Engineering)</p>
                    <p class="subDetails" style="padding-left:4em">Minor in Philosophy</p>
                </article>
            </div>
            <div class="clear"></div>
        </section>

        <section>
            <div class="sectionTitle">
                <h1>Personal</h1>
            </div>
            <div class="sectionContent">
                <article>
                    <h2>Veteran</h2>
                    <p class="subDetails">Corporal (E-4)</p>
                    <p class="subDetails">Field Telephone/Switchboard Technician (2811)</p>
                    <p class="subDetails">United States Marine Corps, 1995-1999</p>
                </article>

                <article>
                    <h2>Eagle Scout</h2>
                </article>
            </div>
            <div class="clear"></div>
        </section>
    </div>
</div>
@endsection
