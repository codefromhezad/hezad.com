var AVG_BLOCK_HEIGHT_DIVISOR = 32;
var MAX_BLOCK_WIDTH	= 50;
var MIN_BLOCK_WIDTH	= 30;

var PALETTE = [ [15,28,40], [19, 105, 114], [103, 191, 167], [243, 207, 91], [240, 116, 68] ];

var Glitch = function(canvasId) {
	var g = this;

	this.element = document.getElementById(canvasId);
	this.context = this.element.getContext("2d");

	this.width = this.element.width;
		this.height = this.element.height;

		this.imageData = this.context.createImageData(this.width, this.height);

		this.setPixel = function(pos, r, g, b, a) {
		index = (pos.x + pos.y * this.imageData.width) * 4;
		this.imageData.data[index+0] = r;
		this.imageData.data[index+1] = g;
		this.imageData.data[index+2] = b;
		this.imageData.data[index+3] = a;
	}

	this.rect = function(pos0, pos1, col) {
		this.context.beginPath();
		this.context.rect(pos0.x, pos0.y, pos1.x, pos1.y);
		this.context.fillStyle = col;
		this.context.fill();
	}

	this.generate = function(current_height) {

		g.context.clearRect(0, 0, g.width, g.height);

		var current_col;
		var current_pos = {x: 0, y: 0};

		var finished = false;
		var new_line = false;
		var carry = 0;

		while( ! finished ) {

			var nx = current_pos.x + 20;
				
			var old_col = current_col;
			current_col = PALETTE[ Math.floor( PALETTE.length * Math.random() ) ];

			for(var i = 0; i < 5; i++) {
				if( old_col == current_col ) {
					var c = PALETTE[ Math.floor( PALETTE.length * Math.random() ) ];
					current_col = c[0]+","+c[1]+","+c[2];
				} else {
					break;
				}
			}

			var ny = current_pos.y;

			if( nx >= g.width ) {
				ny += current_height;
				new_line = true;
			}

			g.rect({x: current_pos.x, y: current_pos.y}, {x: nx, y: current_height}, (current_col ? "rgba("+current_col+",1)" : "transparent"));

			if( new_line ) {
				current_pos.x = 0;
				new_line = false;
			} else {
				current_pos.x = nx;
			}
			
			current_pos.y = ny;

			if( ny >= g.height ) {
				finished = true;
			}
		}
	}
}



$( function() {

	var glitch = new Glitch("canvas1");
	var cheight = 20;

	glitch.generate(cheight);

	setInterval( function() {
		glitch.generate(cheight);
	}, 500 );

});