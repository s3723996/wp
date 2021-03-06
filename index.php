<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <!-- meta http-equiv="X-Frame-Options" content="deny" -->
    <title>My First Webpage</title>

    <!-- We will cover style later. Skip down to the body tag -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="wireframe.css" />
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css" disabled>
    <script src='wireframe.js'></script>

</head>

<body>

    <header>
        <!-- Image sourced from www.rmit.edu.au for educational purposes only -->
        <div><img src='../media/RMIT-Logo.png' alt='RMIT University logo' height=80 />￼// ZAADIE FOURIE \\
        </div>
    </header>

    <nav>
        Assignments:
        <!-- link locations: relative to current directory -->
        <ul>
            <li><a href="a2/index.php" target="_blank">A2</a></li>
            <li><a href="a3/index.php" target="_blank">A3</a></li>
        </ul> |
        <!-- link locations: relative to e54061's root web directory -->
        <a href="https://titan.csit.rmit.edu.au/~e54061/wp/lectures/" target="_blank">Lectures 0 - 11</a> |
        <a href="https://titan.csit.rmit.edu.au/~e54061/secure" target="_blank">Secure Resources Area</a> |
        <!-- link location: absolute -->
        <a href='https://drive.google.com/drive/u/4/folders/1m39LF9WZdfVRENiELsCA5IL5Fh0KGeGC' target="_blank">WP Public</a>
    </nav>

    <main>
        <article id='about-me'>
            <h2>About me</h2>
            <p>
                <img src='../media/avatar.png' width='200' alt='my photo' />
            </p>
            <details open>
                <summary>read more ...</summary>
                <table id="more-about-me">
                    <tr>
                        <th>Have you any programming or web design experience?</th>
                        <td>Yes, a little bit in web dev (javascript and java basics - currently making my way through a full-stack <a href="https://www.udemy.com/the-web-developer-bootcamp/learn/v4/overview" target="_blank">udemy course</a>). I enjoy curating pages and creative direction. I'm also interested in social media marketing and algorithms.
                        </td>
                    </tr>
                    <tr>
                        <th>Do you see yourself as a programmer or designer, or both?</th>
                        <td>Definitely both, I froth over creative X tech projects like <a href="https://pitch-studios.com/NIKE-AIR-PROJECTIONS" target="_blank">THIS ONE!</a> . &hearts;
                        </td>
                    </tr>
                    <tr>
                        <th>What has brought you to this course at RMIT?</th>
                        <td>Interdisciplinary possibilities, plus I get bored easily and have itchy feet (which you'll probably gather from my university transcript haha).
                        </td>
                    </tr>
                    <tr>
                        <th>What are you hoping to get out of the course?</th>
                        <td>Employment as a Junior Web Developer to upskill, fund my yoga training course in India, and organise a women's (mainly for my friends) Bootcamp sometime in December 2018.</td>
                    </tr>
                    <tr>
                        <th>Assignments allow for individual or paried work. What strengths do you have and what strengths would you like your assignment partner to have?</th>
                        <td>
                            <ul>
                                <li>Organisation/ Project Management</li>
                                <li>Design/Creative Skills</li>
                                <li>Emotinally/Empathetic Attuned</li>
                            </ul>
                            <hr> Partners Strengths:
                            <ul>
                                <li>Enthusiastic</li>
                                <li>Dedicated</li>
                                <li>Ambitious</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>What websites do you use the most? (NB: "family friendly" !)</th>
                        <td>
                            <ol>
                                <li><a href="https://trello.com/" target="_blank">Trello</a></li>
                                <li><a href="https://www.google.com.au/drive/" target="_blank">Google Drive</a></li>
                                <li><a href="https://rmit.instructure.com/" target="_blank">Canvas </a></li>
                                <li><a href="https://www.udemy.com/" target="_blank">Udemy</a></li>
                                <li><a href="https://medium.com/" target="_blank">Medium</a></li>
                                <li><a href="https://www.google.com/maps/" target="_blank">Google Maps</a></li>
                                <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
                                <li><a href="https://www.youtube.com/" target="_blank">YouTube</a></li>
                                <li><a href="https://www.my.commbank.com.au/netbank/Logon/Logon.aspx" target="_blank">NetBank</a></li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <th>Do you have any interests or hobbies?</th>
                        <td>Reading (especially about philosophy &amp; wellbeing), gym/yoga, writing, art, photography, culture, food, cooking, nutrition, technology, content creation (if that’s a hobby…)
                        </td>
                    </tr>
                </table>
            </details>
        </article>
        <aside>
        </aside>
    </main>

    <footer>
        &copy; Zaadie Fourie
        <script>
            document.write(new Date().getFullYear());
        </script>.
        <a href='https://github.com/s3723996'>GitHub</a> &#9734;
        <a href='https://medium.com/@zaadie'>Medium</a> &#9734;
        <a href='https://instagram.com/_zaadie'>Instagram</a><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </footer>

</body>

</html>
