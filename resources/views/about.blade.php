<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marko Tričković</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="test.css" rel="stylesheet">
    </head>

    <body>

        <div" style="width: 800px; height=500px;">
            <div align="center">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
            </div>

            <div>
                <img src="{{ asset('My picture.png') }}" style="width: 180px; height: 250px; float: left;">
            </div>

            <div>
                <h2>
                    <b>About</b>
                </h2>
                <p style="font-size: 18px;">
                    Hi, I am Marko. I am a back-end web developer. I have experience with the following technologies: <b>ASP.NET</b>,
                    <b>PHP+Blade</b>, and <b>Laravel</b> framework.
                    My favorite code editor is <b>VS Code</b>. I also practice coding algorithms for online competitions such as
                    <b>Google Code Jam</b>.
                </p>

                <p>
                    I finished my "Computer Science" degree at the <b>"Faculty of Electronic Engineering" in Niš</b>. I prefer to keep
                    learning and challenge myself. Staying on the path to continuously learning new things is my motto. I am learning
                    very fast, I can pick up new skills and work on different projects and roles with relative ease.
                </p>
                
                <p>
                    I enjoy coding applications. I have over 2 years of experience in companies that work in web development. I worked
                    with a wide range of soft skills, from agile to the management of services and applications. I love to code in
                    C/C++ and PHP. Also, I try to stay on top of all the current changes that we're facing daily by reading new books,
                    researching topics, and coding in my free time.
                </p>

                <p>
                    My main focus is concerning networking and application development or library to be used in systems. Also,
                    I can give support in cases when the administration is necessary. As I had a broad range of skills when
                    software management is needed.
                </p>

                <p>
                    I currently work from home for one small company from Niš, and I am open to new opportunities. You can read more about me
                    in the PDF file attached at the end of this page.
                </p>
            </div>

        </div>
        <b>My resume</b> <a href="{{ asset('CV - Marko Tričković.pdf') }}">PDF</a>
    </body>
</html>
