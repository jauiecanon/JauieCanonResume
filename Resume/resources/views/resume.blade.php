<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $resume->name }} - Resume</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
        }
        .resume-header {
            background-color: #343a40;
            color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 5px solid #ffffff;
        }
        .resume-header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: bold;
        }
        .resume-header p {
            margin: 0;
            font-size: 1.2rem;
        }
        .section-title {
            color: #007bff;
            font-size: 1.75rem;
            margin-top: 30px;
            margin-bottom: 15px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
            display: flex;
            align-items: center;
        }
        .section-title i {
            margin-right: 10px;
        }
        .resume-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .experience-item, .education-item, .certification-item {
            margin-bottom: 20px;
        }
        .font-weight-bold {
            color: #343a40;
        }
        ul {
            padding-left: 20px;
            margin: 0;
        }
        ul li {
            list-style: disc;
            margin-bottom: 5px;
        }
        .badge {
            font-size: 0.95rem;
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
            color: #6c757d;
            border-top: 1px solid #e9ecef;
            margin-top: 40px;
        }
        .icon-text {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .icon-text i {
            margin-right: 8px;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="container mt-5 mb-5">
    <header class="resume-header">
        @if($resume->image)
            <img src="{{ asset($resume->image) }}" alt="{{ $resume->name }}" class="profile-img">
        @endif
        <h1>{{ $resume->name }}</h1>
        <p class="icon-text"><i class="fas fa-map-marker-alt"></i>{{ $resume->address }}</p>
        <p class="icon-text">
            <i class="fas fa-phone"></i> Phone: {{ $resume->phone }} | 
            <i class="fas fa-envelope"></i> Email: {{ $resume->email }}
        </p>
    </header>

    <div class="resume-content">
        <!-- Objective Section -->
        <section>
            <h2 class="section-title"><i class="fas fa-bullseye"></i> Objective</h2>
            <p>{{ $resume->objective ?? 'To apply my skills in a growth-oriented environment and contribute to innovative projects.' }}</p>
        </section>

        <!-- Experience Section -->
        <section>
            <h2 class="section-title"><i class="fas fa-briefcase"></i> Experience</h2>
            @foreach ($resume->experiences as $experience)
                <div class="experience-item">
                    <h5 class="font-weight-bold">{{ $experience->title }} - {{ $experience->company }}</h5>
                    <p class="text-muted">{{ $experience->location }} ({{ $experience->start_date }} - {{ $experience->end_date ?? 'Present' }})</p>
                    <ul>
                        <li>{{ $experience->description }}</li>
                    </ul>
                </div>
            @endforeach
        </section>

        <!-- Education Section -->
        <section>
            <h2 class="section-title"><i class="fas fa-graduation-cap"></i> Education</h2>
            @foreach ($resume->education as $education)
                <div class="education-item">
                    <h5 class="font-weight-bold">{{ $education->degree }}</h5>
                    <p class="text-muted">{{ $education->institution }} ({{ $education->start_date }} - {{ $education->end_date }})</p>
                </div>
            @endforeach
        </section>

        <!-- Skills Section -->
        <section>
            <h2 class="section-title"><i class="fas fa-tools"></i> Skills</h2>
            <ul class="list-inline">
                @foreach ($resume->skills as $skill)
                    <li class="list-inline-item badge badge-secondary p-2 m-1">{{ $skill->skill_name }}</li>
                @endforeach
            </ul>
        </section>

        <!-- Certifications Section -->
        <section>
            <h2 class="section-title"><i class="fas fa-certificate"></i> Certifications</h2>
            @foreach ($resume->certifications as $certification)
                <div class="certification-item">
                    <h5 class="font-weight-bold">{{ $certification->title }}</h5>
                    <p class="text-muted">{{ $certification->organization }} ({{ $certification->date_obtained }})</p>
                </div>
            @endforeach
        </section>

        <!-- Languages Section -->
        <section>
            <h2 class="section-title"><i class="fas fa-language"></i> Languages</h2>
            <ul class="list-inline">
                <li class="list-inline-item badge badge-primary p-2 m-1">English - Fluent</li>
                <li class="list-inline-item badge badge-primary p-2 m-1">Filipino - Native</li>
            </ul>
        </section>
    </div>

    <footer class="footer">
        <p>&copy; {{ now()->year }} {{ $resume->name }}. All rights reserved.</p>
    </footer>
</div>

</body>
</html>
