<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CV - {{ $tutorData['tutorName'] }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 11px;
            color: #333;
            background: #fff;
            width: 100%;
        }

        /* ─── HEADER NAME ─── */
        .header {
            text-align: center;
            padding: 20px 0 12px;
            letter-spacing: 2px;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
            color: #111;
        }

        /* ─── PHOTO STRIP ─── */
        .photo-strip {
            margin: 0 28px 14px;
            height: 105px;
            position: relative;
            border-radius: 6px;
            overflow: hidden;
            background: #ddd;
        }

        .photo-strip::before {
            content: '';
            position: absolute;
            inset: 0;
            background: repeating-linear-gradient(
                45deg,
                #bbb 0px, #bbb 3px,
                #d8d8d8 3px, #d8d8d8 11px
            );
        }

        .photo-wrap {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 88px;
            height: 88px;
            border-radius: 50%;
            border: 3px solid #3daf6e;
            overflow: hidden;
            background: #ccc;
            z-index: 2;
        }

        .photo-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* ─── TWO-COLUMN BODY ─── */
        .two-col {
            display: table;
            width: 100%;
            padding: 0 28px;
            table-layout: fixed;
        }

        .col-left {
            display: table-cell;
            width: 46%;
            padding-right: 18px;
            vertical-align: top;
        }

        .col-right {
            display: table-cell;
            width: 54%;
            padding-left: 6px;
            vertical-align: top;
        }

        .section-heading {
            font-size: 12.5px;
            font-weight: 700;
            color: #111;
            margin-bottom: 3px;
            margin-top: 12px;
        }

        .section-rule {
            border: none;
            border-top: 1.8px solid #222;
            margin-bottom: 6px;
        }

        .section-body {
            font-size: 11px;
            color: #444;
            line-height: 1.65;
        }

        /* ─── EDUCATION TABLE ─── */
        .edu-wrap {
            padding: 0 28px 12px;
        }

        .edu-heading {
            font-size: 12.5px;
            font-weight: 700;
            color: #111;
            margin-bottom: 3px;
            margin-top: 8px;
        }

        .edu-rule {
            border: none;
            border-top: 1.8px solid #222;
            margin-bottom: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10.5px;
        }

        table thead tr {
            background-color: #1e2d3d;
            color: #fff;
        }

        table thead th {
            padding: 7px 8px;
            text-align: left;
            font-weight: 600;
        }

        table tbody tr:nth-child(odd)  { background: #fff; }
        table tbody tr:nth-child(even) { background: #f5f5f5; }

        table tbody td {
            padding: 6px 8px;
            color: #333;
            border-bottom: 1px solid #e0e0e0;
        }

        /* ─── FOOTER ─── */
        .footer {
            border-top: 1px solid #ccc;
            margin-top: 14px;
            padding: 10px 28px 16px;
            text-align: center;
            font-size: 10px;
            color: #444;
        }

        .footer .cv-link { color: #1a6fcf; }

        .footer .contact-row {
            margin-top: 6px;
            width: 100%;
        }

        .footer .contact-row td {
            text-align: center;
            font-size: 10px;
            padding: 0 4px;
            color: #333;
        }

        .footer .website-row { margin-top: 4px; }
    </style>
</head>
<body>

{{-- ── HEADER ── --}}
<div class="header">{{ $tutorData['tutorName'] }}</div>

{{-- ── PHOTO STRIP ── --}}
<div class="photo-strip">
    <div class="photo-wrap">
        @if(!empty($tutorData['tutorImage']))
            <img src="{{ public_path('storage/' . $tutorData['tutorImage']) }}" alt="Photo">
        @endif
    </div>
</div>

{{-- ── TWO-COLUMN ── --}}
<div class="two-col">

    {{-- LEFT COLUMN --}}
    <div class="col-left">

        <div class="section-heading">Personal Info</div>
        <hr class="section-rule">
        <div class="section-body">
            Tutor Id : {{ $tutorData['tutorId'] }}<br>
            University : {{ $tutorData['tutorUniversity'] }}<br>
            Department : {{ $tutorData['tutorDepartment'] }}
        </div>

        <div class="section-heading">Present Address</div>
        <hr class="section-rule">
        <div class="section-body">
            {{ $tutorData['tutorPresentAddress'] }}
        </div>

        <div class="section-heading">Permanent Address</div>
        <hr class="section-rule">
        <div class="section-body">
            {{ $tutorData['tutorPermanentAddress'] }}
        </div>

    </div>

    {{-- RIGHT COLUMN --}}
    <div class="col-right">

        <div class="section-heading">About Yourself</div>
        <hr class="section-rule">
        <div class="section-body">
            {{ $tutorData['tutorAbout'] }}
        </div>

        <div class="section-heading">Tuition Job Experience</div>
        <hr class="section-rule">
        <div class="section-body">
            {{ $tutorData['tutorExperience'] }}
        </div>

        <div class="section-heading">Reasons to be Getting Hired</div>
        <hr class="section-rule">
        <div class="section-body">
            {{ $tutorData['tutorHiringReason'] }}
        </div>

    </div>
</div>

{{-- ── EDUCATION TABLE ── --}}
<div class="edu-wrap">
    <div class="edu-heading">Education Information</div>
    <hr class="edu-rule">
    <table>
        <thead>
            <tr>
                <th style="width:16%">Exam Title</th>
                <th style="width:34%">Institute</th>
                <th style="width:38%">Department</th>
                <th style="width:12%">Result</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>SSC</td>
                <td>{{ $tutorData['tutorSscIns'] }}</td>
                <td>{{ $tutorData['tutorSscGroup'] }}</td>
                <td>{{ $tutorData['tutorSscResult'] }}</td>
            </tr>
            <tr>
                <td>HSC</td>
                <td>{{ $tutorData['tutorHscIns'] }}</td>
                <td>{{ $tutorData['tutorHscGroup'] }}</td>
                <td>{{ $tutorData['tutorHscResult'] }}</td>
            </tr>
            <tr>
                <td>BSC</td>
                <td>{{ $tutorData['tutorUniversity'] }}</td>
                <td>{{ $tutorData['tutorDepartment'] }}</td>
                <td>{{ $tutorData['tutorBscResult'] }}</td>
            </tr>
            <tr>
                <td>MSC</td>
                <td>{{ $tutorData['tutorUniversityMsc'] }}</td>
                <td>{{ $tutorData['tutorUnidepartmentMsc'] }}</td>
                <td>{{ $tutorData['tutorResultMsc'] }}</td>
            </tr>
        </tbody>
    </table>
</div>

{{-- ── FOOTER ── --}}
<div class="footer">
    {{-- <div>Full "CV" Link :</div> --}}
    {{-- <div>
        <a class="cv-link" href="https://globaltuitionmedia.com.bd/hub/tutor-details/{{ $tutorData['tutorId'] }}">
            https://globaltuitionmedia.com.bd/hub/tutor-details/{{ $tutorData['tutorId'] }}
        </a>
    </div> --}}
    <table class="contact-row">
        <tr>
            <td>&#9990; 09647 426052</td>
            <td style="color:#aaa;padding:0 2px">|</td>
            <td>&#9990; 01871 526052</td>
            <td style="color:#aaa;padding:0 2px">|</td>
            <td>&#9993; globaltuition44@gmail.com</td>
        </tr>
    </table>
    <div class="website-row">&#127760; globaltuitionmedia.com.bd</div>
</div>

</body>
</html>
