<x-navbtn>
<!DOCTYPE html>
<html>
<head>

    <style>
        body {
            background-color: blanchedalmond;
            font-family: 'Times New Roman';
            color: brown;
        }
        img {
            border-radius: 50%;
            border: 8px solid rgb(170, 105, 70);
        }
        h3 {
            font-family: 'Times New Roman';
            background-color: rgb(245, 215, 178);
            color: rgb(170, 105, 70);
            padding: 10px;
            border-radius: 20px;
        }
        p {
            text-align: justify;
            margin-bottom: 15px;
        }
        ul {
            list-style-type: circle;
            padding-left: 20px;
        }
        h5 {
            font-family: 'Times New Roman';
            background-color: rgb(245, 215, 178);
            color: rgb(170, 105, 70);
            padding: 10px;
            border-radius: 10px;
            display: inline-block;
        }
        footer {
            text-align: center;
            margin-top: 40px;
        }

    </style>
</head>
<body>
<div style="margin: 100px">
    <center>
        <img src="{{ asset('asset/wong_id_photo.jpg') }}" alt="Profile Picture" height="200" width="160">
        <h3>I.T Student</h3>
    </center>

    <h2>About</h2>

    <main>
        <p>Hello there, My name is Allyza Kaye Wong. I'am 21 years old, born on September 1, 2003, in Olongapo City, but now live in Dili Sta. Cruz Ilocos Sur and a 3rd year college student at Ilocos Sur Polytechnic State College (ISPSC). Started my college life at Ilocos Sur Polytechnic State College (ISPSC), where all potential skills can bloom, instructed by skilled instructors. For me, this is the start of a challenge that can help me grow further if I take it seriously and set it as my foundation.</p>


        <h2>Hobbies</h2>
        <ul>
            <li>Reading Novel, Manhwa, and Manga</li>
            <li>Watching Anime Series/Movies</li>
            <li>Listening to Music</li>
            <li>Crocheting</li>
        </ul>

        <h2>Educational Backround</h2>
        <strong>Elementary:</strong><br>
        Dili Elementary School<br>
        <strong>High School:</strong><br>
        Dili Nationa High School<br>
        <strong>College:</strong><br>
        Ilocos Sur Polytechnic State College (present)<br>

        <h2>Contact</h2>
        <p>Email: <a
        href="mailto:wongallyzakaye@gmail.com">wongallyzakaye@gmail.com</a></p>
    </main>

    <footer>
        <h5>Bachelor of Science in Information Technology</h5></footer>
</body>
</html>
</div>

</x-navbtn>
