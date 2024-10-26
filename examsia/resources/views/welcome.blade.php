<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anthony P. Salvador Resume</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f3f5;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #085729;
            color: white;
            text-align: center;
            padding: 30px;
            border-radius: 8px 8px 0 0;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: bold;
        }
        header p {
            margin: 5px 0;
            font-size: 1.1em;
        }
        section {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #2c3e50;
            font-size: 1.8em;
            margin-bottom: 15px;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 5px;
        }
        p, ul {
            font-size: 1.1em;
            margin: 10px 0;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            margin-bottom: 10px;
        }
        li strong {
            font-size: 1.1em;
        }
        li ul {
            margin-top: 5px;
            list-style-type: disc;
            padding-left: 20px;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 15px 0;
            color: #7f8c8d;
            font-size: 0.9em;
            border-top: 1px solid #e0e0e0;
        }
        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }
            section {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        @foreach($resume as $skill)
            <h1>{{ $skill->name }}</h1>
        @endforeach
        <p> @foreach($resume as $skill)
                {{ $skill->address }}
            @endforeach</p>
        <p>Phone:
            @foreach($resume as $skill)
                {{ $skill->phone }}
            @endforeach
         | Email:
            @foreach($resume as $skill)
                {{ $skill->email }}
            @endforeach </p>
    </header>

    <section>
        <h2>Objective</h2>
        <p>
            @foreach($resume as $skill)
                {{ $skill->objective }}
            @endforeach  </p>
    </section>

    <section>
        <h2>Experience</h2>
        <ul>
            <li>
                @foreach($experiences as $skill)
                    <li>{{ $skill->details }}</li>
                @endforeach </h1>

            </li>
        </ul>
    </section>

    <section>
        <h2>Education</h2>
        <ul>
            @foreach($educations as $skill)
                <li>{{ $skill->details }}</li>
            @endforeach </h1>
        </ul>
    </section>

    <section>
        <h2>Skills</h2>
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill->details }}</li>
            @endforeach
        </ul>
    </section>

    <section>
        <h2>Certifications</h2>
        <ul>
            @foreach($resume as $skill)
                <li>{{ $skill->certifications }}</li>
            @endforeach </h1>
        </ul>
    </section>





    <section>
        <h2>Languages</h2>
        <ul>
            @foreach($languages as $skill)
                <li>{{ $skill->details }}</li>
            @endforeach </h1>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 Anthony Salvador. All rights reserved.</p>
    </footer>
</div>

</body>
</html>
