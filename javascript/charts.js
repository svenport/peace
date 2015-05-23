$(document).ready(function(){
	var chart = new CanvasJS.Chart("chartContainer", {
		theme: "theme2",//theme1
		title:{
			text: "Your moods over the last two weeks"              
		},
		animationEnabled: true,   // change to true
		data: [              
		{
			type: "column",
			dataPoints: [
				{ label: "stable",  y: 10  },
				{ label: "fine", y: 15  },
				{ label: "ok", y: 25  },
				{ label: "dizzy",  y: 30  },
				{ label: "bad",  y: 28  }
			]
		}
		]
	});
	chart.render();
});