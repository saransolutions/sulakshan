"use strict";

//Carts initialization
(function() {
	//Global Defaults
	Chart.defaults.global.defaultFontColor = '#444';
	Chart.defaults.global.defaultFontFamily = 'sans-serif';
	Chart.defaults.global.defaultFontSize = 14;
	//Yearly visitors
	var $canvasesYearlyVisitors = jQuery('.canvas-chart-line-yearly-visitors');
	if ($canvasesYearlyVisitors.length) {
		$canvasesYearlyVisitors.each(function(i){

			var MONTHS = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
			var config = {
				type: 'line',
				data: {
					labels: MONTHS,
					datasets: [{
						label: "Unique Visitors",
						backgroundColor: 'rgba(245, 187, 44, 0.6)',
						borderColor: '#f5bb2c',
						//visitors per month
						data: [20, 50, 80, 100, 300, 500, 800, 1000, 900, 700, 1000, 1100],
						fill: true,
					}, 
					//put new dataset here if needed to show multiple datasets on one graph
					]
				},
				options: {
					responsive: true,
					title:{
						display:true,
						text:'Yearly Visitors'
					},
					tooltips: {
						mode: 'index',
						intersect: false,
					},
					hover: {
						mode: 'nearest',
						intersect: true
					},
					scales: {
						xAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Month'
							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Visitors'
							}
						}]
					}
				}
			};


			var canvas = jQuery(this)[0].getContext("2d");;
						
			new Chart(canvas, config);
		});
	} //Yearly visitors

	//Monthly visitors
	var $canvasesMonthlyVisitors = jQuery('.canvas-chart-line-monthly-visitors');
	if ($canvasesMonthlyVisitors.length) {
		$canvasesMonthlyVisitors.each(function(i){

			var DAYS = [
				"01/01",
				"02/01",
				"03/01",
				"04/01",
				"05/01",
				"06/01",
				"07/01",
				"08/01",
				"09/01",
				"10/01",
				"11/01",
				"12/01",
				"13/01",
				"14/01",
				"15/01",
				"16/01",
				"17/01",
				"18/01",
				"19/01",
				"20/01",
				"21/01",
				"22/01",
				"23/01",
				"24/01",
				"25/01",
				"26/01",
				"27/01",
				"28/01",
				"29/01",
				"30/01",
				"31/01"
			 ];
			var config = {
				type: 'line',
				data: {
					labels: DAYS,
					datasets: [{
						label: "Unique Visitors",
						backgroundColor: 'rgba(245, 187, 44, 0.6)',
						borderColor: '#f5bb2c',
						//visitors per month
						data: [
							
							46,
							43,
							44,
							50,
							45,
							29,
							25,
							27,
							28,
							46,
							29,
							50,
							32,
							43,
							37,
							28,
							46,
							20,
							30,
							46,
							28,
							43,
							26,
							28,
							29,
							25,
							34,
							49,
							27,
							30,
							37,

						],
						fill: true,
					}, 
					//put new dataset here if needed to show multiple datasets on one graph
					]
				},
				options: {
					responsive: true,
					title:{
						display:true,
						text:'Monthly Visitors'
					},
					tooltips: {
						mode: 'index',
						intersect: false,
					},
					hover: {
						mode: 'nearest',
						intersect: true
					},
					scales: {
						xAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Day'
							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Visitors'
							}
						}]
					}
				}
			};


			var canvas = jQuery(this)[0].getContext("2d");;
						
			new Chart(canvas, config);
		});
	} //Yearly visitors
})();