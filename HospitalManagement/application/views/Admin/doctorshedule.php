<?php include("header.php")?>
<?php include("top.php")?>
<?php include("leftmenu.php")?>
<!-- Right Sidebar -->
<?php include("rignt.php")?>
<!-- Main Content -->
<section class="content page-calendar">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Calendar
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                    <li class="breadcrumb-item active">Calendar</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">        
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="body">
                        <button type="button" class="btn btn-sm btn-round btn-success waves-effect" data-toggle="modal" data-target="#addevent">Add Events</button>
                        <button class="btn btn-simple btn-sm btn-primary btn-round hidden-lg-up m-t-0 float-right" data-toggle="collapse" data-target="#open-events" aria-expanded="false" aria-controls="collapseExample"><i class="zmdi zmdi-chevron-down"></i></button>                        
                    </div>
                </div>
                <div class="collapse-xs collapse-sm collapse" id="open-events">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Repeating</strong> Event</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>                        
                        </div>
                        <div class="body">
                            <div class="event-name b-lightred row">
                                <div class="col-2 text-center">
                                    <h4>09<span>Dec</span><span>2017</span></h4>
                                </div>
                                <div class="col-10">
                                    <h6>Repeating Event</h6>
                                    <p>It is a long established fact that a reader will be distracted</p>
                                    <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                </div>
                            </div>
                            <div class="event-name b-greensea row">
                                <div class="col-2 text-center">
                                    <h4>16<span>Dec</span><span>2017</span></h4>
                                </div>
                                <div class="col-10">
                                    <h6>Repeating Event</h6>
                                    <p>It is a long established fact that a reader will be distracted</p>
                                    <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                </div>
                            </div>
                            <div class="event-name b-primary row">
                                <div class="col-2 text-center">
                                    <h4>11<span>Dec</span><span>2017</span></h4>
                                </div>
                                <div class="col-10">
                                    <h6>Conference</h6>
                                    <p>It is a long established fact that a reader will be distracted</p>
                                    <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Activity</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>                        
                        </div>
                        <div class="body">                                                    
                            <div class="event-name b-primary row">
                                <div class="col-2 text-center">
                                    <h4>13<span>Dec</span><span>2017</span></h4>
                                </div>
                                <div class="col-10">
                                    <h6>Birthday</h6>
                                    <p>It is a long established fact that a reader will be distracted</p>
                                    <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="body">
                        <button class="btn btn-primary btn-sm btn-round waves-effect" id="change-view-today">today</button>
                        <button class="btn btn-default btn-sm btn-simple btn-round waves-effect" id="change-view-day">Day</button>
                        <button class="btn btn-default btn-sm btn-simple btn-round waves-effect" id="change-view-week">Week</button>
                        <button class="btn btn-default btn-sm btn-simple btn-round waves-effect" id="change-view-month">Month</button>                        
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left fc-corner-right"><span class="fc-icon fc-icon-left-single-arrow"></span></button></div><div class="fc-right"><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-left fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><div class="fc-center"><h2>January 2018</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 438px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 73px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2017-12-31"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-01-01"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-01-02"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-01-03"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-01-04"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-01-05"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-01-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2017-12-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-01-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-01-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-01-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-01-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-01-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-01-06"><span class="fc-day-number">6</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 73px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-01-07"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-01-08"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-01-09"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-01-10"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-01-11"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-01-12"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-01-13"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-01-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-01-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-01-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-01-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-01-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-01-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-01-13"><span class="fc-day-number">13</span></td></tr></thead><tbody><tr><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-cyan fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">Long Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td rowspan="5"></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end b-l b-2x b-primary fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">Conference</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td class="fc-event-container" rowspan="5"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end b-l b-2x b-primary fc-draggable"><div class="fc-content"><span class="fc-time">7a</span> <span class="fc-title">Birthday Party</span></div></a></td></tr><tr><td rowspan="4"></td><td rowspan="4"></td><td class="fc-event-container" rowspan="4"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end b-l b-2x b-lightred fc-draggable"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td rowspan="4"></td><td class="fc-event-container fc-limited"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end b-l b-2x b-amethyst fc-draggable"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-more-cell" rowspan="1"><div><a class="fc-more">+4 more</a></div></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end b-l b-2x b-primary fc-draggable"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end b-l b-2x b-drank fc-draggable"><div class="fc-content"><span class="fc-time">2:30p</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end b-l b-2x b-lightred fc-draggable"><div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">Happy Hour</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 73px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-01-14"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-01-15"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-01-16"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-01-17"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-01-18"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-01-19"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-01-20"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-01-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-01-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-01-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-01-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-01-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-01-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-01-20"><span class="fc-day-number">20</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 73px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-01-21"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-01-22"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-01-23"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-01-24"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-01-25"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-01-26"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-01-27"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-01-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-01-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-01-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-01-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-01-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-01-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-01-27"><span class="fc-day-number">27</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 73px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-01-28"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-01-29"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-01-30"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-01-31"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2018-02-01"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2018-02-02"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-past" data-date="2018-02-03"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-01-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-01-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-01-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-01-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2018-02-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2018-02-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-sat fc-other-month fc-past" data-date="2018-02-03"><span class="fc-day-number">3</span></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end b-l b-2x b-greensea fc-draggable fc-resizable" href="http://google.com/"><div class="fc-content"> <span class="fc-title">Click for Google</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 73px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-02-04"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2018-02-05"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2018-02-06"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2018-02-07"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2018-02-08"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2018-02-09"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-past" data-date="2018-02-10"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2018-02-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2018-02-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2018-02-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2018-02-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2018-02-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2018-02-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-sat fc-other-month fc-past" data-date="2018-02-10"><span class="fc-day-number">10</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>
<?php include("footer.php")?>
<?php include("Js.php")?>
