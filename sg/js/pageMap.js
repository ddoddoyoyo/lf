var words_wrap = ['Front','Front3/4','Drivers seat', 'Passenger side exterior', 'Rear interior', 'Rear exterior'];
var word = ['performance', 'Design', 'Safety', 'Convenience'];
var arr3 = [
	[	//FRONT 에 대한 하위 배열, 호출 방식 arr3[0]
		[	//FRONT 하위의 P, 호출 방식 arr3[0][0]
			[	//타이틀
			],
			[	//링크
			]
		],
		[	//FRONT 하위의 D, 호출 방식 arr3[0][1]
			[	//타이틀, 호출 방식 arr3[0][1][0]
				"Cascading grille","Chrome Garnish","Front hood","Chrome Molding"
			],
			[	//링크, 호출 방식 arr3[0][1][1]
				"3","3,1","3,2","3,4"
			]
		],
		[	//FRONT 하위의 S, 호출 방식 arr3[0][2]
			[	//타이틀, 호출 방식 arr3[0][2][0]
				"AEB","LKAS","BSD","ASCC","HBA","DBL","DAA","AVM","DRM"
			],
			[	//링크, 호출 방식 arr3[0][2][1]
				"19","19,1","19,2","19,4","19,5","19,8","19,3","19,6","19,7"
			]
		],
		[	//FRONT 하위의 C, 호출 방식 arr3[0][3]
			[	//타이틀
			],
			[	//링크
			]
		]
	],

	[	//FRONT3/4 에 대한 하위 배열, 호출 방식 arr3[1]
		[	//FRONT3/4 하위의 P
			[	
				"Nu2.0","U21.7","1.6T-Gdi","2.0T-Gdi"
			],
			[	
				"14","14","14","14"
			]
		],
		[	//FRONT3/4 하위의 D
			[	
				"Head lamp","Vertical LED DRL"
			],
			[	
				"3,3","3,5"
			]
		],
		[	//FRONT3/4 하위의 S
		],
		[	//FRONT3/4 하위의 C
		]
	],

	[	//DRIVER’S SEAT 에 대한 하위 배열, 호출 방식 arr3[2]
		[	//DRIVER’S SEAT 하위의 P
		],
		[	//DRIVER’S SEAT 하위의 D
			[	
				"Steering wheel","Electric parking brake", "8-inch navigation", "IMS", "Heated and ventilated front seat"
			],
			[	
				"9","9,3","9,1","9,6","9,4"
			]
		],
		[	//DRIVER’S SEAT 하위의 S
		],
		[	//DRIVER’S SEAT 하위의 C
			[	
				"Air clean mode","Wireless charging", "4.2 inch supervision cluster"
			],
			[	
				"21,1","21","9,2"
			]
		]
	],

	[	//PASSENGER SIDE EXTERIOR 에 대한 하위 배열, 호출 방식 arr3[3]
		[	//PASSENGER SIDE EXTERIOR 하위의 P
			[	
				"Higher rigidity","Circular chassis structure"
			],
			[	
				"11","11"
			]
		],
		[	//PASSENGER SIDE EXTERIOR 하위의 D
			[	
				"DLO chrome molding","Wheel & Tires", "Side sill molding"
			],
			[	
				"5","5,2","5,1"
			]
		],
		[	//PASSENGER SIDE EXTERIOR 하위의 S
			[	
				"IIHS small overlap test GOOD"
			],
			[	
				"11"
			]
		],
		[	//PASSENGER SIDE EXTERIOR 하위의 C
		]
	],

	[	//REAR INTEROIR 에 대한 하위 배열, 호출 방식 arr3[4]
		[	//REAR INTEROIR 하위의 P
		],
		[	//REAR INTEROIR 하위의 D
		],
		[	//REAR INTEROIR 하위의 S
			[	
				"Advanced 7-airbag"
			],
			[	
				"12"
			]
		],
		[	//REAR INTEROIR 하위의 C
			[	
				"Interior space", "Heated seats"
			],
			[	
				"9","9,5"			]
		]
	],

	[	//REAR EXTEROIR 에 대한 하위 배열, 호출 방식 arr3[5]
		[	//REAR EXTEROIR 하위의 P
			[	
				"Twin muffler : 2.0 turbo only", "Trunk open switch in Hyundai logo", "Dual lower arm multi-link suspension"
			],
			[	
				"7,3","21,2","15"
			]
		],
		[	//REAR EXTEROIR 하위의 D
			[	
				"Rear combination lamp", "Rear bumper", "Rear reflector"
			],
			[	
				"7","7,1","7,2"
			]
		],
		[	//REAR EXTEROIR 하위의 S
			[	
				"Rear view camera"
			],
			[	
				"19,7"
			]
		],
		[	//REAR EXTEROIR 하위의 C
			[	
				"Luggage capacity (462ℓ)"
			],
			[	
				"21,3"
			]
		]
	]
]



// console.log(words_wrap[0]);
// console.log(word[0]);
// console.log(arr3[0][1]);

$(document).ready(function(){
	map_pop(1,2);
	map_pop(1,3);
	map_pop(2,1);
	map_pop(2,2);
	map_pop(3,2);
	map_pop(3,4);
	map_pop(4,1);
	map_pop(4,2);
	map_pop(4,3);
	map_pop(5,3);
	map_pop(5,4);
	map_pop(6,1);
	map_pop(6,2);
	map_pop(6,3);
	map_pop(6,4);
	$('#pageMap .map_pop .close').click(function(){
		$('#pageMap .map_pop').fadeOut(500);
	});


	$('#pageMap .words_wrap:nth-child(1) .word:nth-child(3)').click(function(){
		$('#pageMap .pop_btn_wrap').addClass('pop_btn_wrap2');
	});
	
})


function map_pop(wwNum,wNum) {
	$('#pageMap .words_wrap:nth-child('+wwNum+') .word:nth-child('+wNum+')').click(function(){
		$('#pageMap .pop_btn_wrap').removeClass('pop_btn_wrap2');
		$('#pageMap .map_pop').fadeIn(500);
		$('#pageMap .pop_title').empty(); //pop_title의 내용을 지움
		$('#pageMap .pop_title').append('<span>'+words_wrap[wwNum-1]
				+'</span>_ '+word[wNum-1]);
		$('#pageMap .pop_btn').remove(); //pop_btn를 없애버림
		for(var i=0; i<arr3[wwNum-1][wNum-1][0].length;i++){
			$('#pageMap .pop_btn_wrap').append('<div class="pop_btn" onclick="pageMapNav1('+arr3[wwNum-1][wNum-1][1][i]+');">'+arr3[wwNum-1][wNum-1][0][i]+'</div>');
		}
	});
} 