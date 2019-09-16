<div class="tab-pane fade" id="tab-one" role="tabpanel" aria-labelledby="report">
    <div class="row">
        <!-- reports -->
        <div class="content-area">
            <div class="filters">
            <span>Select the year:</span>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">2019</button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">2020</a>
                        <a class="dropdown-item" href="#">2021</a>
                        <a class="dropdown-item" href="#">2023</a>
                    </div>
                </div>
            </div>
            <ul class="report">
                @for ($i = 0; $i < 10; $i++) <!-- item -->
                    <li class="single-report">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="icon">
                                <div class="report">
                                    <h3 class="lato-bold font-16 color-dark mb-2">Al Mawashi reported a profit of KD 3.5 million for the 9 months ended 30-09-20</h3>
                                    <p>Date: September 30, 2015</p>
                                    <ul class="btsn">
                                        <li><a href="#pdf" class="btn default">Download Report</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>
                    <!-- item -->
                    @endfor
            </ul>
        </div>

        <!-- end tender icon -->
    </div>
</div>