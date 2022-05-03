<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/header.php";
include "include/sidebar.php";
include "include/cssDatatables.php";
?>
<!-- begin #content -->
<div id="content" class="content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fab fa-medapps icon-page"></i>
                <font class="text-page">Utility</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Utility</a></li>
                <li class="breadcrumb-item active">Restore</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="icon-copy dw dw-calendar-11"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <!-- begin Restore -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-upload"></i> Upload</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <form action="/" method="POST">
                        <fieldset>
                            <div class="form-group row m-b-15">
                                <label class="col-md-3 col-form-label">Upload File yang ingin di Restore</label>
                                <div class="col-md-7">
                                    <input type="file" id="IDRestore" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <button type="submit" class="btn btn-sm btn-primary m-r-5">Load Data</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end Restore -->
    <!-- begin row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> Restore</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <th width="1%"></th>
                                <th width="1%" data-orderable="false"></th>
                                <th class="text-nowrap">Rendering engine</th>
                                <th class="text-nowrap">Browser</th>
                                <th class="text-nowrap">Platform(s)</th>
                                <th class="text-nowrap">Engine version</th>
                                <th class="text-nowrap">CSS grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td width="1%" class="f-s-600 text-inverse">1</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td>4</td>
                                <td>X</td>
                            </tr>
                            <tr class="even gradeC">
                                <td width="1%" class="f-s-600 text-inverse">2</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                                <td>Trident</td>
                                <td>Internet Explorer 5.0</td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>C</td>
                            </tr>
                            <tr class="odd gradeA">
                                <td width="1%" class="f-s-600 text-inverse">3</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                                <td>Trident</td>
                                <td>Internet Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td>5.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="even gradeA">
                                <td width="1%" class="f-s-600 text-inverse">4</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                                <td>Trident</td>
                                <td>Internet Explorer 6</td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                            </tr>
                            <tr class="odd gradeA">
                                <td width="1%" class="f-s-600 text-inverse">5</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                                <td>Trident</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td>7</td>
                                <td>A</td>
                            </tr>
                            <tr class="even gradeA">
                                <td width="1%" class="f-s-600 text-inverse">6</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                                <td>Trident</td>
                                <td>AOL browser (AOL desktop)</td>
                                <td>Win XP</td>
                                <td>6</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">7</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">8</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">9</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Firefox 2.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">10</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Firefox 3.0</td>
                                <td>Win 2k+ / OSX.3+</td>
                                <td>1.9</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">11</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Camino 1.0</td>
                                <td>OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">12</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Camino 1.5</td>
                                <td>OSX.3+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">13</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Netscape 7.2</td>
                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">14</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Netscape Browser 8</td>
                                <td>Win 98SE+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">15</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Netscape Navigator 9</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">16</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Mozilla 1.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">17</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Mozilla 1.1</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">18</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Mozilla 1.2</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.2</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">19</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Mozilla 1.3</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">20</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Mozilla 1.4</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.4</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">21</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Mozilla 1.5</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">22</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Mozilla 1.6</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.6</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">23</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Mozilla 1.7</td>
                                <td>Win 98+ / OSX.1+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">24</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Mozilla 1.8</td>
                                <td>Win 98+ / OSX.1+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">25</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Seamonkey 1.1</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">26</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                                <td>Gecko</td>
                                <td>Epiphany 2.20</td>
                                <td>Gnome</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">27</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                                <td>Webkit</td>
                                <td>Safari 1.2</td>
                                <td>OSX.3</td>
                                <td>125.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">28</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                                <td>Webkit</td>
                                <td>Safari 1.3</td>
                                <td>OSX.3</td>
                                <td>312.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">29</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                <td>Webkit</td>
                                <td>Safari 2.0</td>
                                <td>OSX.4+</td>
                                <td>419.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">30</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                                <td>Webkit</td>
                                <td>Safari 3.0</td>
                                <td>OSX.4+</td>
                                <td>522.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">31</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                                <td>Webkit</td>
                                <td>OmniWeb 5.5</td>
                                <td>OSX.4+</td>
                                <td>420</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">32</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                                <td>Webkit</td>
                                <td>iPod Touch / iPhone</td>
                                <td>iPod</td>
                                <td>420.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">33</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                                <td>Webkit</td>
                                <td>S60</td>
                                <td>S60</td>
                                <td>413</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">34</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                                <td>Presto</td>
                                <td>Opera 7.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">35</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                                <td>Presto</td>
                                <td>Opera 7.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">36</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                                <td>Presto</td>
                                <td>Opera 8.0</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">37</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                                <td>Presto</td>
                                <td>Opera 8.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">38</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                                <td>Presto</td>
                                <td>Opera 9.0</td>
                                <td>Win 95+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">39</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                                <td>Presto</td>
                                <td>Opera 9.2</td>
                                <td>Win 88+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">40</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                                <td>Presto</td>
                                <td>Opera 9.5</td>
                                <td>Win 88+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">41</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                                <td>Presto</td>
                                <td>Opera for Wii</td>
                                <td>Wii</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">42</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                                <td>Presto</td>
                                <td>Nokia N800</td>
                                <td>N800</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">43</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                <td>Presto</td>
                                <td>Nintendo DS browser</td>
                                <td>Nintendo DS</td>
                                <td>8.5</td>
                                <td>C/A<sup>1</sup></td>
                            </tr>
                            <tr class="gradeC">
                                <td width="1%" class="f-s-600 text-inverse">44</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                                <td>KHTML</td>
                                <td>Konqureror 3.1</td>
                                <td>KDE 3.1</td>
                                <td>3.1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">45</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                                <td>KHTML</td>
                                <td>Konqureror 3.3</td>
                                <td>KDE 3.3</td>
                                <td>3.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">46</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                                <td>KHTML</td>
                                <td>Konqureror 3.5</td>
                                <td>KDE 3.5</td>
                                <td>3.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeX">
                                <td width="1%" class="f-s-600 text-inverse">47</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                                <td>Tasman</td>
                                <td>Internet Explorer 4.5</td>
                                <td>Mac OS 8-9</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeC">
                                <td width="1%" class="f-s-600 text-inverse">48</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                                <td>Tasman</td>
                                <td>Internet Explorer 5.1</td>
                                <td>Mac OS 7.6-9</td>
                                <td>1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeC">
                                <td width="1%" class="f-s-600 text-inverse">49</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                                <td>Tasman</td>
                                <td>Internet Explorer 5.2</td>
                                <td>Mac OS 8-X</td>
                                <td>1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">50</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                                <td>Misc</td>
                                <td>NetFront 3.1</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td width="1%" class="f-s-600 text-inverse">51</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                                <td>Misc</td>
                                <td>NetFront 3.4</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeX">
                                <td width="1%" class="f-s-600 text-inverse">52</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                                <td>Misc</td>
                                <td>Dillo 0.8</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeX">
                                <td width="1%" class="f-s-600 text-inverse">53</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                                <td>Misc</td>
                                <td>Links</td>
                                <td>Text only</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeX">
                                <td width="1%" class="f-s-600 text-inverse">54</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                                <td>Misc</td>
                                <td>Lynx</td>
                                <td>Text only</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeC">
                                <td width="1%" class="f-s-600 text-inverse">55</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeC">
                                <td width="1%" class="f-s-600 text-inverse">57</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeU">
                                <td width="1%" class="f-s-600 text-inverse">58</td>
                                <td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td>-</td>
                                <td>U</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>
<?php include "include/jsDatatables.php"; ?>