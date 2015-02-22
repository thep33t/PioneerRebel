$(document).ready(function() {
        $("table").hide();
 
        $("h1").click(function() {
                $(this).next().slideToggle(300);
        });
});
var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);

var res = {
	loader: $('<div />', { class: 'loader' }),
	container: $('.statusdiv')
}
$('div.power').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=PT',

		success: function(data) {
			res.container.html(data);
			setTimeout(clear, 4000);
		}
	})
})
$('div.gp').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=GP',

		success: function(data) {
			res.container.html(data);
			setTimeout(clear, 4000);
		}
	})
})
$('div.volm5').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=VD5',

		success: function(data) {
			res.container.html(data);
			setTimeout(clear, 4000);
		}
	})
})
$('div.volm1').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=VD',

		success: function(data) {
			res.container.html(data);
			setTimeout(clear, 4000);
		}
	})
})
$('div.volp1').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=VU',

		success: function(data) {
			res.container.html(data);
			setTimeout(clear, 4000);
		}
	})
})
$('div.volp5').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=VU5',

		success: function(data) {
			res.container.html(data);
			setTimeout(clear, 4000);
		}
	})
})
$('div.FU').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=FU',

		success: function(data) {
			res.container.html(data);
			setTimeout(clear, 4000);
		}
	})
})
$('div.FD').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=FD',

		success: function(data) {
			res.container.html(data);
			setTimeout(clear, 4000);
		}
	})
})
$('div.sr1').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=SR1',

		success: function(data) {
			res.container.html(data);
		}
	})
})
$('div.sr2').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=SR2',

		success: function(data) {
			res.container.html(data);
		}
	})
})
$('div.sr3').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=SR3',

		success: function(data) {
			res.container.html(data);
		}
	})
})
$('div.mute').on('click', function() {
	$.ajax({
		url: '../sendcmd123.php?command=MT',

		success: function(data) {
			res.container.html(data);
			setTimeout(clear, 4000);
		}
	})
})

function clear() {
    res.container.html(null);
}



