@extends('layouts.main')
@section('extends_css')
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row" style="margin: 0 9% 2%;">
        <div class="col-lg-offset-3 col-lg-9 primary_color" style="padding: 0 7%;">
            <h1 class="fira_bold">Vessel Diving & ROV</h1>
            <br>
            <p class="san_light" style="font-size:18px;">
                Seascape provides a complete in-house package including air and saturation diving, ROV inspection and construction, in conjunction with its survey and inspection reporting departments.
            </p>
            <p class="san_light" style="font-size:18px;">
                Seascape operates IMCA compliant air diving equipment, and has qualified personnel both Indonesian and expatriate, and in partnership with its parent  company, Mermaid Offshore Services (MOS), provides saturation diving services using a fleet of DP2 DSV’s.
            </p>
            <p class="san_light" style="font-size:18px;">
                ROV capabilities include work class through to inspection and observation vehicles, which can be fitted out to client specification dependent on operational requirements.
            </p>
            <p class="san_light" style="font-size:18px;">
                With Seascape’s other capacities; Survey and Inspection Reporting, no out sourcing is required, giving Seascape the ability to provide extremely cost effective solutions that include:
            </p>
            <br>
            <ul class="san_light" id="oss_list">
                <li>Emergency Call Out Subsea Intervention</li>
                <li>Planned or Unplanned Inspection, Repair and Maintenance (IRM) of Subsea Facilities</li>
                <li>Installation Support with Diving and ROV Services</li>
            </ul>
            <br>
            <p class="san_light" style="font-size:18px;">
                If you have a need for Subsea Diving/ROV services, we would be pleased to discuss your requirements and to provide you with a complete technical and commercial proposal upon request.
            </p>
        </div>
    </div>
    <div class="row primary_color" style="margin: 10% 9%;">
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-4"><img src="{{ asset('image/services/vessel_image.png') }}" /> </div>
                <div class="col-lg-8">
                    <p class="san_light" style="font-size:18px;">our fleet</p>
                    <h1 class="fira_bold" style="margin:0;">Vessel</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-9" style="padding: 0 7%;">
            <div class="row san_semi_bold ">
                @foreach($data['vessel'] as $item)
                    <div class="col-lg-6 list_fleet">
                        <p style="font-size: 18px;font-weight: bold;">— {{ $item['title'] }}</p>
                        <p id="lf_link" style="font-size: 14px;"><a href="/services/equipment_details/{{ $item['id'] }}">See Details</a></p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row primary_color" style="margin: 10% 9%;">
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-4"><img src="{{ asset('image/services/rov.png') }}" /> </div>
                <div class="col-lg-8">
                    <p class="san_light" style="font-size:18px;">our fleet</p>
                    <h1 class="fira_bold" style="margin:0;">ROV</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-9" style="padding: 0 7%;">
            <div class="row san_semi_bold ">
                @foreach($data['rov'] as $item)
                    <div class="col-lg-6 list_fleet">
                        <p style="font-size: 18px;font-weight: bold;">— {{ $item['title'] }}</p>
                        <p id="lf_link" style="font-size: 14px;"><a href="/services/equipment_details/{{ $item['id'] }}">See Details</a></p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="shade_background primary_color mar_top_10">
        <div style="padding:2.5% calc(5% + 15px)">
            <div class="row" >
                <div class="col-lg-7 col-xs-7">
                    <p class="san_light" style="letter-spacing:4px;">CONTACT</p>
                    <h1 class="fira_bold">Let’s get in touch with us</h1>
                </div>
                <div class="col-lg-offset-2 col-lg-3 col-xs-4" style="text-align:right">
                    <button class="btn btn-primary" style="margin-top:10%;">CONTACT</button>
                </div>
            </div>
        </div>
    </div>

@endsection
