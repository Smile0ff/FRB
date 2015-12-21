<?php
	sleep(1);

	if(isset($_POST["location"]["hospital"]) && isset($_POST["location"]["school"])){

        $response = [
			"categories" => [
				[
					"title" => "Лікарні",
					"icon" => "hospital",
					"places" => [
						[
							"title" => "Клиника Medicom",
							"photo" => "medikom.jpg",
							"phone_label" => "Телефони",
							"phones" => [
								[
									"+38(099) 999-99-99"
								],
								[
									"+38(099) 999-99-98"
								]
							],
							"address_label" => "Адреса",
							"address" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quae rerum magnam nisi ipsa.",
							"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nesciunt iure laborum at officiis reiciendis quam temporibus ratione dolor eos repellendus et, distinctio, quasi corporis numquam eius quibusdam doloremque ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos sunt sit eaque magni inventore est error dolorum vel ipsa facere facilis, consequuntur alias ad sint, nobis excepturi laudantium labore asperiores."
						],
						[
							"title" => "Клиника Medicom",
							"photo" => "medikom.jpg",
							"phone_label" => "Телефони",
							"phones" => [
								[
									"+38(099) 999-99-99"
								],
								[
									"+38(099) 999-99-98"
								]
							],
							"address_label" => "Адреса",
							"address" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quae rerum magnam nisi ipsa.",
							"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nesciunt iure laborum at officiis reiciendis quam temporibus ratione dolor eos repellendus et, distinctio, quasi corporis numquam eius quibusdam doloremque ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos sunt sit eaque magni inventore est error dolorum vel ipsa facere facilis, consequuntur alias ad sint, nobis excepturi laudantium labore asperiores."
						],
						[
							"title" => "Клиника Medicom",
							"photo" => "medikom.jpg",
							"phone_label" => "Телефони",
							"phones" => [
								[
									"+38(099) 999-99-99"
								],
								[
									"+38(099) 999-99-98"
								]
							],
							"address_label" => "Адреса",
							"address" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quae rerum magnam nisi ipsa.",
							"text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nesciunt iure laborum at officiis reiciendis quam temporibus ratione dolor eos repellendus et, distinctio, quasi corporis numquam eius quibusdam doloremque ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos sunt sit eaque magni inventore est error dolorum vel ipsa facere facilis, consequuntur alias ad sint, nobis excepturi laudantium labore asperiores."
						]
					]
				],
                [
                    "title" => "Школа",
                    "icon" => "university",
                    "places" => [
                        [
                            "title" => "Школа 1",
                            "photo" => "",
                            "phone_label" => "Телефони",
                            "phones" => [
                                [
                                    "+38(099) 999-99-99"
                                ],
                                [
                                    "+38(099) 999-99-98"
                                ]
                            ],
                            "address_label" => "Адреса",
                            "address" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quae rerum magnam nisi ipsa.",
                            "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nesciunt iure laborum at officiis reiciendis quam temporibus ratione dolor eos repellendus et, distinctio, quasi corporis numquam eius quibusdam doloremque ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos sunt sit eaque magni inventore est error dolorum vel ipsa facere facilis, consequuntur alias ad sint, nobis excepturi laudantium labore asperiores."
                        ]
                    ]
                ]
			],
			"locations" => [
				[
					"title" => "Клиника Medicom",
					"icon" => "hospital",
					"lat" => "50.455928",
					"lng" => "30.477120"
				],
				[
					"title" => "Клиника Medicom",
					"icon" => "hospital",
					"lat" => "50.423425",
					"lng" => "30.480794"
				],
				[
					"title" => "Клиника Medicom",
					"icon" => "hospital",
					"lat" => "50.403391",
					"lng" => "30.631858"
				],
				[
					"title" => "Школа 1",
					"icon" => "university",
					"lat" => "50.442090",
					"lng" => "30.510594"
				]
			]
		];

	} elseif(isset($_POST["location"]["hospital"])){

        $response = [
            "categories" => [
                [
                    "title" => "Лікарні",
                    "icon" => "hospital",
                    "places" => [
                        [
                            "title" => "Клиника Medicom",
                            "photo" => "medikom.jpg",
                            "phone_label" => "Телефони",
                            "phones" => [
                                [
                                    "+38(099) 999-99-99"
                                ],
                                [
                                    "+38(099) 999-99-98"
                                ]
                            ],
                            "email_label" => "Єлектронна пошта",
                            "emails" => [
                                [
                                    "test@test.com"
                                ],
                                [
                                    "test1@test.com"
                                ]
                            ],
                            "address_label" => "Адреса",
                            "address" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quae rerum magnam nisi ipsa.",
                            "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nesciunt iure laborum at officiis reiciendis quam temporibus ratione dolor eos repellendus et, distinctio, quasi corporis numquam eius quibusdam doloremque ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos sunt sit eaque magni inventore est error dolorum vel ipsa facere facilis, consequuntur alias ad sint, nobis excepturi laudantium labore asperiores."
                        ],
                        [
                            "title" => "Клиника Medicom",
                            "photo" => "medikom.jpg",
                            "phone_label" => "Телефони",
                            "phones" => [
                                [
                                    "+38(099) 999-99-99"
                                ],
                                [
                                    "+38(099) 999-99-98"
                                ]
                            ],
                            "email_label" => "Єлектронна пошта",
                            "emails" => [
                                [
                                    "test@test.com"
                                ],
                                [
                                    "test1@test.com"
                                ]
                            ],
                            "address_label" => "Адреса",
                            "address" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quae rerum magnam nisi ipsa.",
                            "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nesciunt iure laborum at officiis reiciendis quam temporibus ratione dolor eos repellendus et, distinctio, quasi corporis numquam eius quibusdam doloremque ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos sunt sit eaque magni inventore est error dolorum vel ipsa facere facilis, consequuntur alias ad sint, nobis excepturi laudantium labore asperiores."
                        ],
                        [
                            "title" => "Клиника Medicom",
                            "photo" => "medikom.jpg",
                            "phone_label" => "Телефони",
                            "phones" => [
                                [
                                    "+38(099) 999-99-99"
                                ],
                                [
                                    "+38(099) 999-99-98"
                                ]
                            ],
                            "address_label" => "Адреса",
                            "address" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quae rerum magnam nisi ipsa.",
                            "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita nesciunt iure laborum at officiis reiciendis quam temporibus ratione dolor eos repellendus et, distinctio, quasi corporis numquam eius quibusdam doloremque ex.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos sunt sit eaque magni inventore est error dolorum vel ipsa facere facilis, consequuntur alias ad sint, nobis excepturi laudantium labore asperiores."
                        ]
                    ]
                ]
            ],
            "locations" => [
                [
                    "title" => "Клиника Medicom",
                    "icon" => "hospital",
                    "lat" => "50.455928",
                    "lng" => "30.477120"
                ],
                [
                    "title" => "Клиника Medicom",
                    "icon" => "hospital",
                    "lat" => "50.423425",
                    "lng" => "30.480794"
                ],
                [
                    "title" => "Клиника Medicom",
                    "icon" => "hospital",
                    "lat" => "50.403391",
                    "lng" => "30.631858"
                ]
            ]
        ];

	} else{
		header('HTTP/1.1 500 Internal Server Error');
		$response["message"] = "Щось трапилось, будь ласка спробуйте ще раз трохи пізніше";
	}
	echo json_encode($response);

?>
