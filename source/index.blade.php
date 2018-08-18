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
                    <div class="sectionTitle">
                        <h1>Profile</h1>
                    </div>

                    <div class="sectionContent">
                        <p>Passionate about:</p>
                        <ul>
                            <li>Solving real problems, not just providing solutions.</li>
                            <li>Getting a project done on-time and meeting all requirements.</li>
                            <li>Learning new technologies.</li>
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
                        <h2>Software Engineer</h2>
                        <h3><a href="https://i3logix.com">i3logix</a></h3>

                        <p class="subDetails">July 2018 &mdash; Present</p>
                        <ul>
                            <li>Zend Framework, EXT JS, JIRA</li>
                            <li>Back-end focused with PHP 7.1+, Zend Framework components on custom, internal built framework</li>
                            <li>Use, debug, design and implement legacy EXT JS framework in scrum sprint using JIRA and git</li>
                            <li>Perform code reviews on peer pull requests as-required</li>
                            <li>Support off-hours deployment releases on a rotating schedule</li>
                        </ul>
                    </article>
                </div>

                <div class="sectionContent">
                    <article>
                        <h2>Developer III (Senior)</h2>
                        <h3><a href="https://realpage.com">RealPage</a> (formerly The Rainmaker Group)</h3>

                        <p class="subDetails">July 2017 &mdash; July 2018</p>
                        <ul>
                            <li>Laravel, JavaScript, JIRA, AWS</li>
                            <li>Help shape and implement new features within the Rainmaker ILM product suite, working
                                with the engineering team (fellow developers, designers, and product owners) and sales
                                and support to figure out what we should (and shouldn’t) be building and how to build it
                                well.</li>
                            <li>Perform critical real-time web application development using the LAMP stack. (PHP, SQL, JavaScript, CSS, etc)</li>
                            <li>Integrate with in-house and third-party applications through REST and SOAP APIs.</li>
                            <li>Unit-test code for robustness, including edge cases, usability, and generally reliability</li>
                            <li>Collaborate with the QA team in design and implementation of testing plans to resolve issues and ensure software quality</li>
                        </ul>
                    </article>
                </div>

                <div class="sectionContent">
                    <article>
                        <h2>PHP Developer</h2>
                        <h3><a href="https://transitivemedia.com">TransitiveMedia</a></h3>

                        <p class="subDetails">October 2016 &mdash; July 2017</p>
                        <ul>
                            <li>Part of a small creative team that is responsible for all aspects of the ongoing and new
                                software
                                development and maintenance of our IP software, system maintenance, and client requests
                                (internal and external clients)
                            </li>
                            <li>Application based on Laravel, Eloquent, MySQL, Blade, PHP 7+, HTML5, CSS3</li>
                            <li>Full-Stack Development from database design to CSS with Bootstrap</li>
                            <li>Build and consume internal RESTful API</li>
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
                            <li>Work closely with the Development Team Lead, Product Management Team and other
                                developers to
                                define, design, build, test and maintain consumer-facing web based business and public
                                web
                                applications and intranet application.
                            </li>
                            <li>Application based on Symfony 2 with Doctrine 2, MySQL, Twig, PHP 5.6, HTML5, CSS3</li>
                            <li>Full-Stack Development from database design to CSS / LESS coding with Bootstrap</li>
                            <li>Integrated with Cloudinary API, Twitter Bootstrap Carousel</li>
                            <li>Asynchronous loading of content with jQuery / JavaScript, JSON</li>
                            <li>Coded and validate automated test cases with PHPUnit, Selenium / Mink</li>
                            <li>Use JIRA issue tracker for work estimation, status, issue dependency and resolution</li>
                            <li>Git repository and branch source code management</li>
                            <li>Developer environment: Windows 7 host, VirtualBox VM with Fedora</li>
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
                        <p>Creator and full programmer of front and back ends of site using Laravel Framework,
                            MySQL, jQuery and Bootstrap. The website covers high school football schedules,
                            results, standings and computer analysis (RPI).</p>
                        <p>RPI calculation is used as part of seeding process for Colorado 5A Football Playoff Bracket
                            generation. (A committee uses the RPI as part of many factors to determine the seeding.)</p>
                        <p>Website receives ~500,000 page views annually.</p>
                    </article>
                </div>

                <div class="sectionContent">
                    <article>
                        <h2><a href="https://tractrak.com">TracTrak.com</a></h2>
                        <p class="subDetails">Launched: January 2016</p>
                        <p>Creator and full programmer of front and back ends of site using Laravel Framework,
                            MySQL, Vue.js, Pusher.com, <span style="text-decoration:line-through">Dropbox</span> and Bootstrap.
                            The website provides real-time results of track time for track meets from the <a href="http://finishlynx.com">FinishLynx</a> Fully-Automated-Timing system.</p>
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
                                <canvas id="php" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>PHP</p>

                                <p>2004-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="mysql" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>MySQL</p>

                                <p>2008-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="vue" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>Vue.js</p>

                                <p>2016-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="js" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>JavaScript</p>

                                <p>2004-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="jquery" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>jQuery</p>

                                <p>2010-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="cpp" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>C++</p>

                                <p>2014-2015</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="oop" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>OOP</p>

                                <p>2011-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="bootstrap" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>Bootstrap</p>

                                <p>2013-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="html" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>HTML</p>

                                <p>1998-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="html5" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>HTML5</p>

                                <p>2013-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="css" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>CSS</p>

                                <p>2008-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="composer" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>composer</p>

                                <p>2013-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="git" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>git</p>

                                <p>2013-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="symfony" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>Symfony 2/3</p>

                                <p>2015-2016</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="doctrine" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>Doctrine</p>

                                <p>2015-2016</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="bitbucket" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>BitBucket</p>

                                <p>2013-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="laravel" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>Laravel</p>

                                <p>2013-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="wordpress" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>WordPress</p>

                                <p>2008-2012, 2016</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="joomla" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>Joomla</p>

                                <p>2005-2011</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="querypath" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>QueryPath</p>

                                <p>2010-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="twitterapi" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>Twitter API</p>

                                <p>2010-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="rest" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>REST</p>

                                <p>2014-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="eloquent" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>Eloquent ORM</p>

                                <p>2013-Present</p>
                            </div>
                        </li>
                        <li class="skill">
                            <div class="chart">
                                <canvas id="aws" height="55" width="55"></canvas>
                            </div>

                            <div class="details">
                                <p>AWS</p>

                                <p>2014-Present</p>
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
                                    alt="profile for MECU on Stack Exchange, a network of free, community-driven Q&amp;A sites"
                                    title="profile for MECU on Stack Exchange, a network of free, community-driven Q&amp;A sites"/></a>
                    </div>
                    <div>
                        <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                        <script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/hoppes"
                                data-format="inline"
                                data-related="false"></script>
                    </div>
                    <div>
                        <iframe src="https://githubbadge.appspot.com/MECU?a=0"
                                style="border: 0;height: 142px;width: 200px;overflow: hidden;" frameBorder="0"></iframe>
                    </div>
                </div>
                <div style="margin-top:35px">
                    <a href="https://www.testdome.com/cert/ebc6fc0a57f1493bb903560af1e6b556"
                       class="testdome-certificate-stamp gold"><span
                                class="testdome-certificate-name">Michael Hoppes</span><span
                                class="testdome-certificate-test-name">PHP </span><span
                                class="testdome-certificate-card-logo">TestDome<br/>Certificate</span></a>
                    <script type="text/javascript">var stylesheet = "https://www.testdome.com/content/source/stylesheets/embed.css",
                            link = document.createElement("link");
                        link.href = stylesheet, link.type = "text/css", link.rel = "stylesheet", link.media = "screen,print", document.getElementsByTagName("head")[0].appendChild(link);</script>
                    <a href="https://www.testdome.com/cert/8d90e080467b4dfe81402d865b9a8005"
                       class="testdome-certificate-stamp gold"><span
                                class="testdome-certificate-name">Michael Hoppes</span><span
                                class="testdome-certificate-test-name">PHP (Hard) </span><span
                                class="testdome-certificate-card-logo">TestDome<br/>Certificate</span></a>
                    <script type="text/javascript">var stylesheet = "https://www.testdome.com/content/source/stylesheets/embed.css",
                            link = document.createElement("link");
                        link.href = stylesheet, link.type = "text/css", link.rel = "stylesheet", link.media = "screen,print", document.getElementsByTagName("head")[0].appendChild(link);</script>
                    <a href="https://www.testdome.com/cert/6d8701d0c13547af8bca47eb26f24009"
                       class="testdome-certificate-stamp gold"><span
                                class="testdome-certificate-name">Michael Hoppes</span><span
                                class="testdome-certificate-test-name">PHP and SQL </span><span
                                class="testdome-certificate-card-logo">TestDome<br/>Certificate</span></a>
                    <script type="text/javascript">var stylesheet = "https://www.testdome.com/content/source/stylesheets/embed.css",
                            link = document.createElement("link");
                        link.href = stylesheet, link.type = "text/css", link.rel = "stylesheet", link.media = "screen,print", document.getElementsByTagName("head")[0].appendChild(link);</script>
                    <a href="https://www.testdome.com/cert/62e99b8524244eb8b429df841ec7bff1"
                       class="testdome-certificate-stamp gold"><span
                                class="testdome-certificate-name">Michael Hoppes</span><span
                                class="testdome-certificate-test-name">PHP and SQL (Hard) </span><span
                                class="testdome-certificate-card-logo">TestDome<br/>Certificate</span></a>
                    <script type="text/javascript">var stylesheet = "https://www.testdome.com/content/source/stylesheets/embed.css",
                            link = document.createElement("link");
                        link.href = stylesheet, link.type = "text/css", link.rel = "stylesheet", link.media = "screen,print", document.getElementsByTagName("head")[0].appendChild(link);</script>
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
                        <p class="subDetails">Coursework in Computer Science</p>
                    </article>

                    <article>
                        <h2>University of Colorado at Boulder</h2>
                        <p class="subDetails">Master of Science (Mechanical Engineering)</p>
                        <p class="subDetails">Bachelor of Science (Mechanical Engineering)</p>
                        <p class="subDetails" style="padding-left:5em">Minor in Philosophy</p>
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

                    <article>
                        <h2>Hobbies:</h2>
                        <p class="subDetails">Operating finish line camera timing system at high school track meets in
                            the
                            spring.</p>
                        <p class="subDetails">High school sports, college football</p>
                    </article>
                </div>
                <div class="clear"></div>
            </section>
        </div>
    </div>
@endsection
