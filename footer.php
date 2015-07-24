	<footer>
		<div class="container">
			<div class="row" id="info">
				<!-- <div id="data-count-top">
					<span class="filter-count"></span> selected out of <span class="total-count"></span> records &nbsp;
					<span id="reset-all">
						<button type="button" class="btn btn-primary btn-xs"><a href="javascript:dc.filterAll();dc.redrawAll();">Reset Filters</a></button>
					</span>
				</div> -->
				<div class="col-xs-4">
					<div class="real-time-total">
						<div class="total-selected">Total Selected</div>
						<div id="chart-number-total">
							<span class="number-display"></span>
							<span> of </span>
							<span class="budget-total">$7,186,474,597</span><br>
						</div>
					</div><!-- end real-time-total -->
				</div>
				<div id="ring-total" class="col-xs-4">
					<section id="chart-ring-budget">
						<section id="total-percent">100%</section>
					</section>
					<p id="comment">^ring will update to show % of whole</p>
				</div>
			</div><!-- end info -->
		</div><!-- end container -->
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="js/lib/crossfilter.min.js"></script>
	<script type="text/javascript" src="js/lib/dc.min.js"></script>
	<!--[if lte IE 9]><script src="js/lib/aight.min.js"></script><![endif]-->
	<!--[if IE 8]><script src="js/d3.ie8.js"></script><![endif]-->

	<script src="js/budget-explorer.js"></script>
</body>
</html>