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
$('div.test').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=TS',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.GMainIn').on('click', function() {
	$.ajax({
		url: '../PioneerRebel/sendcmd.php?command=GF',

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


$('div.HDZpower').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=HDZPT',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.HDZgp').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=HDZGP',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.gHDZin').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=HDZGI',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.ZEC').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=ZEC',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.ZEB').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=ZEB',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.HDZBLURAY').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=HDZBLURAY',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.HDZHTPC').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=HDZHTPC',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.HDZCOMP').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=HDZCOMP',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.HDZATV').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=HDZATV',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.HDZXBONE').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=HDZXBONE',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.HDZHDMI5').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=HDZHDMI5',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})
$('div.HDZBD').on('click', function() {
        $.ajax({
                url: '../PioneerRebel/sendcmd.php?command=HDZBD',

                success: function(data) {
                        res.container.html(data);
                        setTimeout(clear, 4000);
                }
        })
})






function clear() {
    res.container.html(null);
}
