<div class="tab-pane fade" id="tab-one" role="tabpanel" aria-labelledby="report">
    <div class="owl-carousel owl-theme scroll reports  box-shadow">
        @foreach($reports as $report)
            <div class="item">
                <a href="{{ route('downloadReport',$report->report_id_code) }}" target="_blank">
                    <img src="{{ url()->assetFrom(config('externalAssets.ext_asset_link'), 'uploads/Others/pdfimage.png') }}" />
                    <div class="bottom">
                        <p>{{$report->report_title}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

