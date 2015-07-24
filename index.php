<?php require_once('header.php'); ?>

<div class="container">
    <div id="budget-header">
        <img src="img/new_city_logo_grey.png" alt="city logo" class="logo-img">
        <p><span class="city-title">Open Budget  </span><span class="app-name">Explorer</span></p>
    </div>

    <!--    BEGIN VISUALIZATION MAIN    -->
    <div class="row" id="info">
        <div id="data-count-top">
            <span class="filter-count"></span> selected out of <span class="total-count"></span> records &nbsp;
            <span id="reset-all">
                <button type="button" class="btn btn-primary btn-xs"><a href="javascript:dc.filterAll();dc.redrawAll();">Reset Filters</a></button>
            </span>
        </div>
        <div class="col-xs-12"><hr></div>
        <div class="col-xs-4">
            <div class="total-selected">Total Selected
            </div><hr>
            <div style="text-align: center;">
                <div id="chart-number-total">
                    <span style="number-display"></span>
                </div>
                <div>
                    <div style="text-align: center;">of</div>
                    <span style class="budget-total">$7,186,474,597</span><br>
                </div>
            </div>
        </div>
        <div id="ring-total" class="col-xs-4">
            <section id="chart-ring-budget">
                <section id="total-percent">100%</section>
            </section>
            <p id="comment">^ring will update to show % of whole</p>
        </div>
        <div class="col-xs-4">
            <section class="dept-title" id="filters">Director of Finance</section>
            <hr>
            <p class="description">Overseeing the financial, accounting, and budgeting functions of the executive branch. <em>(this will update as dept is selected.)</em></p>
        </div>
    </div>
    <div id="row-charts" class="row">
        <div id="department" class="col-xs-4">
            <hr><p span class="section-title">Choose a Department <span class="glyphicon glyphicon-question-sign"></span><hr>
            </p>
            <section id="chart-row-dept">
            </section>
        </div>
        <div id="funding" class="col-xs-4">
            <section id="chart-row-fund"><hr>
                <p span class="section-title">Funding Source <span class="glyphicon glyphicon-question-sign"></span></p>
                <hr>
            </section>
        </div>
        <div id="category" class="col-xs-4">
            <section id="chart-bar-char"><hr>
                <p span class="section-title">Category <span class="glyphicon glyphicon-question-sign"></span></p>
                <hr>
            </section>
        </div>
    </div>
    
    <!-- create a custom header -->
    <div id="data-table" class="row">
        <section id="data-count">
            <span class="filter-count"></span> selected out of
            <span class="total-count"></span> records
        </section>
        <p span class="section-title">Sub-Category Items (determined by selections above):</p>
        <hr>
        <table class="table table-hover table-striped" id="chart-table-activity">
            <thead>
            <tr class="header">
                <th>Department</th>
                <th>Activity</th>
                <th>Category</th>
                <th>Fund</th>
                <th>Budget</th>
            </tr>
            </thead>
        </table>
    <!-- data rows will fill in here -->
    </div>
</div>
    
<?php require_once('footer.php'); ?>
