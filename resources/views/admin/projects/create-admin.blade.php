<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cuxeya - Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style_original.css') }}">
<link rel="stylesheet" href="{{ asset('css/main-color.css') }}" id="colors">
<link rel="stylesheet" href="{{ asset('css/richtext.min.css') }}">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

	@include("admin.layouts.header-admin")

<!-- Dashboard -->
<div id="dashboard">

	@if(Auth::user()->type == 'ADMIN')	
		@include("admin.layouts.menu-admin")
	@else
		@include("admin.layouts.menu")
	@endif

	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Agregar nueva ayuda</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Admin</a></li>
							<li>Agregar ayuda</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<div id="response-validate"></div>

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> Información basica</h3>
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Nombre de la ayuda <i class="tip" data-tip-content="Nombre del proyecto"></i></h5>
								<input id="project-name" class="search-field" type="text" value="">
							</div>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Tipo -->
							<div class="col-md-6">
							<h5>Tipo de ayuda</h5>
								<select id="project-type" class="chosen-select-no-single">
									<option value="independent" selected>Negocio/Indenpendiente</option>
									<option value="foundation">Fundación</option>
								</select>
							</div>

							<!-- Categoría -->
							<div class="col-md-6">
								<h5>Categoría</h5>
								<select id="category" class="chosen-select-no-single">
									<option value="none" label="blank">Selecciona una categoría</option>	
									<option value="adoption">Adopción</option>
									<option value="advisory">Asesoría</option>
									<option value="nutriment">Alimentos</option>
									<option value="education">Educación</option>
									<option value="objects">Objetos</option>
									<option value="health">Salud</option>
									<option value="hostels">Albergues</option>
									<option value="volunteering">Voluntariado</option>
								</select>
							</div>

						</div>
						<!-- Row / End -->

						<!-- Row -->
						<div class="row with-forms">

							<!-- Online ó presencial -->
							<div class="col-md-6">
							<h5>Online ó presencial</h5>
								<select id='modality-project' class="chosen-select-no-single">
									<option value='face-to-face' selected>Presencial</option>
									<option value='on-line'>Online</option>
								</select>
							</div>

						</div>
						<!-- Row / End -->


					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-picture"></i> Documentación <i class="tip" data-tip-content="Pedimos tus documentos, para facilitar el trámite, no haremos mal uso de tu información"></i></h3>
						</div>

						<h5>Por favor adjunta los siguientes documentos en formato PDF.</h5>

						<!-- Row -->
						<div id='row-type-independent' class="row with-forms">

							<table class="basic-table">
								<tr>
									<th>Documento</th>
									<th></th>
									<th></th>
								</tr>
								<tr id="row_ine_doc2">
									<td>Identificación oficial del representante legal (por ambos lados).</td>
									<td><input type="file" accept="application/pdf" id="ine_doc2" /></td>
									<td id="column_ine_doc2"><input type="hidden" id="data_ine_doc2" value="none"/></td>
								</tr>
							</table>

						</div>
						<!-- Row / End -->

						<!-- Row -->
						<div id='row-type-fundation' class="row with-forms">

							<table class="basic-table">
								<tr>
									<th>Documento</th>
									<th></th>
									<th></th>
								</tr>
								
								<tr id="row_ac_doc">
									<td>Acta constitutiva.</td>
									<td><input type="file" accept="application/pdf" id="ac_doc"  /></td>
									<td id="column_ac_doc"><input type="hidden" id="data_ac_doc" value="none"/></td>
								</tr>
								<tr id="row_csf_doc">
									<td>Constancia de situación fiscal.</td>
									<td><input type="file" accept="application/pdf" id="csf_doc" /></td>
									<td id="column_csf_doc"><input type="hidden" id="data_csf_doc" value="none"/></td>
								</tr>
								<tr id="row_cd_doc">
									<td>Comprobante de domicilio.</td>
									<td><input type="file" accept="application/pdf" id="cd_doc" /></td>
									<td id="column_cd_doc"><input type="hidden" id="data_cd_doc" value="none"/></td>
								</tr>
								<tr id="row_ine_doc">
									<td>Identificación oficial del representante legal (por ambos lados).</td>
									<td><input type="file" accept="application/pdf" id="ine_doc" /></td>
									<td id="column_ine_doc"><input type="hidden" id="data_ine_doc" value="none"/></td>
								</tr>
								
							</table>
						
						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->

					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-location"></i> Modalidad</h3>
						</div>

						<div class="submit-section">

							<!-- Row -->
							<div id='row-online-modality' class="row with-forms">

								<!-- Link Zoom -->
								<div class="col-md-6">
									<h5>Link Zoom <i class="tip" data-tip-content="Comparte tu link de Zoom."></i></h5>
									<input id="link-zoom" type="text" placeholder="URL">
								</div>

							</div>
							<!-- Row / End -->

							<!-- Row -->
							<div id='row-inperson-modality' class="row with-forms">

								<!-- País -->
								<div class="col-md-6">
									<h5>País</h5>
									<select id="country" class="chosen-select-no-single">
										<option value="none" label="blank">Selecciona un país</option>	
										<option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico" selected>Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>

								<!-- Ciudad -->
								<div class="col-md-6">
									<h5>Ciudad</h5>
									<input id="city" type="text" placeholder="Ciudad">
								</div>

								<!-- Dirección -->
								<div class="col-md-6">
									<h5>Dirección</h5>
									<input id="address" type="text" placeholder="Calle, Numero, Colonia">
								</div>

								<!-- Estado -->
								<div class="col-md-6">
									<h5>Estado</h5>
									<input id="state" type="text">
								</div>

								<!-- Códido postal -->
								<div class="col-md-6">
									<h5>Código postal</h5>
									<input id="zip-code" type="text">
								</div>

							</div>
							<!-- Row / End -->

						</div>
					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-picture"></i> Galería <i class="tip" data-tip-content="Elige al mínimo 2 imagenes, de dimensiones óptimas de 1200 x 800 pixeles, que pese menos de 5MB"></i></h3>
						</div>

						<!-- Dropzone -->
						<div class="submit-section">
							<form action="{{ route('dropzone.store') }}" enctype="multipart/form-data" class="dropzone" id="dropzone">
								@csrf
    							<div class="fallback">
        							<input id="files" multiple="true" name="files[]" type="file">
    							</div>
							</form>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Phone -->
							<div class="col-md-12">
								<h5>Link de Youtube Video <span>(opcional)</span></h5>
								<input id="youtube-link" type="text">
							</div>

						</div>
						<!-- Row / End -->


					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-docs"></i> Detalles</h3>
						</div>

						<!-- Descripción -->
						<div class="form">
							<h5>Descripción del proyecto <i class="tip" data-tip-content="Escribe de qué trata tu proyecto, todo lo que es necesario para las personas que estás buscando."></i></h5>
							<textarea id="description" class="WYSIWYG" name="summary" cols="40" rows="3" spellcheck="true"></textarea>
						</div>

						<!-- Row -->
						<div class="row with-forms">

							<!-- Phone -->
							<div class="col-md-4">
								<h5>Teléfono <span>(opcional)</span></h5>
								<input id="phone" type="text">
							</div>

							<!-- Página web -->
							<div class="col-md-4">
								<h5>Página web <span>(opcional)</span></h5>
								<input id="web-site" type="text">
							</div>

							<!-- Email -->
							<div class="col-md-4">
								<h5>Email <span>(opcional)</span></h5>
								<input id="email" type="text">
							</div>

						</div>
						<!-- Row / End -->


						<!-- Row -->
						<div class="row with-forms">

							<!-- Phone -->
							<div class="col-md-4">
								<h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(opcional)</span></h5>
								<input id="facebook" type="text" placeholder="https://www.facebook.com/">
							</div>

							<!-- Website -->
							<div class="col-md-4">
								<h5 class="twitter-input"><i class="fa fa-twitter"></i> Twitter <span>(opcional)</span></h5>
								<input id="twitter" type="text" placeholder="https://www.twitter.com/">
							</div>

							<!-- Email Address -->
							<div class="col-md-4">
								<h5 class="gplus-input"><i class="fa fa-instagram"></i> Instagram <span>(opcional)</span></h5>
								<input id="instagram" type="text" placeholder="https://instagram.com/">
							</div>

						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->


					<!-- Section -->
					<div class="add-listing-section margin-top-45">
						
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-book-open"></i> Donaciones (opcional) <i class="tip" data-tip-content="Si deseas recibir donaciones, llena la tabla de abajo, ejemplo:<br>Concepto: Donación de alimentos.<br>Descripción: Donaremos 1MXN por cada peso y será solo para comprar alimentos.<br>Monto: 100MXN"></i></h3>
							<!-- Switcher -->
							<label class="switch"><input id="receive-donations" type="checkbox" checked=""><span class="slider round"></span></label>
						</div>

						<!-- Switcher ON-OFF Content -->
						<div class="switcher-content">

							<div class="row">
								<div class="col-md-12">
									<table id="pricing-list-container">
										<tr class="pricing-list-item pattern">
											<td>
												<div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
												<div class="fm-input pricing-name"><input type="text" placeholder="Titulo"></div>
												<div class="fm-input pricing-ingredients"><input type="text" placeholder="Descripción"></div>
												<div class="fm-input pricing-price"><input type="text" placeholder="Monto" data-unit="MXN"></div>
												<div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>
											</td>
										</tr>
									</table>
									<a href="#" class="button add-pricing-list-item">Agregar Opción</a>
									<!-- <a href="#" class="button add-pricing-submenu">Add Category</a> -->
								</div>

								<!-- Online ó presencial -->
								<div class="col-md-6">
								<h5>¿Acepta donación personalizada?</h5>
									<select id="personalized-donation" class="chosen-select-no-single">
										<option value="yes" selected>Si</option>
										<option value="no">No</option>
									</select>
								</div>

							</div>

						</div>
						<!-- Switcher ON-OFF Content / End -->

					</div>
					<!-- Section / End -->

					<p></p>
					<p>Al darle click al botón de <b>Guardar</b> aceptas el <a href="/aviso-de-privacidad" target="_blank">aviso de privacidad</a>, los <a href="/terminos-y-condiciones" target="_blank">términos y condiciones del servicio.</a></p>
					<a href="#" id="save-project" class="button preview">Guardar <i class="fa fa-arrow-circle-right"></i></a>

				</div>
			</div>

			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2021 Cuxeya. Propiedad de Bull & Bear Foundation.</div>
			</div>

		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->

<div id="loading-always" class="loading-div">
          This div is always loading
</div>

<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{ asset('scripts/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\jquery-migrate-3.1.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\rangeslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts\custom.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script type="text/javascript" src="{{ asset('scripts/jquery.richtext.js') }}"></script>

<!-- Opening hours added via JS (this is only for demo purpose) -->
<script>
$(".opening-day.js-demo-hours .chosen-select").each(function() {
	$(this).append(''+
        '<option></option>'+
        '<option>Closed</option>'+
        '<option>1 AM</option>'+
        '<option>2 AM</option>'+
        '<option>3 AM</option>'+
        '<option>4 AM</option>'+
        '<option>5 AM</option>'+
        '<option>6 AM</option>'+
        '<option>7 AM</option>'+
        '<option>8 AM</option>'+
        '<option>9 AM</option>'+
        '<option>10 AM</option>'+
        '<option>11 AM</option>'+
        '<option>12 AM</option>'+
        '<option>1 PM</option>'+
        '<option>2 PM</option>'+
        '<option>3 PM</option>'+
        '<option>4 PM</option>'+
        '<option>5 PM</option>'+
        '<option>6 PM</option>'+
        '<option>7 PM</option>'+
        '<option>8 PM</option>'+
        '<option>9 PM</option>'+
        '<option>10 PM</option>'+
        '<option>11 PM</option>'+
        '<option>12 PM</option>');
});
</script>

<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="{{ asset('scripts\dropzone.js') }}"></script>
<script type="text/javascript">

        Dropzone.options.dropzone =
        {
            maxFilesize: 10,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 60000,
            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
				console.log(response);
                return false;
			},
			init: function() {
				this.on("addedfile", function(file) {
					console.log("Added file:" + file.name);
					add_file_element(file.name);
				});
				this.on("removedfile", function(file) {
					console.log("removed file:" + file.name); 
					remove_file_element(file.name);
				});
  			}
        	};
    </script>
	<script type="text/javascript" src="{{ asset('scripts/custom/projects.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function () {  
    		$.ajaxSetup({
        		headers: {
            		'X-CSRF-TOKEN': '{{ csrf_token() }}'
        		}
    		});
  		});
</script>

</body>
