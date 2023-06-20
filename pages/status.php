<?php include 'include/layout/header.php';?>
<?php include 'include/layout/head.php';?>
<?php include 'config.php'?>
	<div id="checkMhiStatus">
		<div class="field">
			<div class="control">
			  <input id="pin-info" class="input is-info" type="text" placeholder="Введите ПИН">
			</div>
		</div>
		<!-- <h5 id="result"></h5> -->
		<p id="result" class="is-size-6 has-text-centered"></p>
		<p id="status-oms" class="is-size-6 has-text-centered"></p>
		<p id="payment" class=""></p>
		<button class="button is-info is-outlined" onclick = "checkStatus()">Поиск</button>
	</div>
	
	<script>
		function checkStatus() {
			var pin = document.getElementById("pin-info").value;
			var xmlhttp = new XMLHttpRequest();
    		xmlhttp.onreadystatechange = function() {

				if (this.readyState == 4 && this.status == 200) {
				var data = JSON.parse(this.responseText);
				var surname = data.surname;
				var name = data.name;
			    var pname = data.patronymic;
						if (data.mhi == 0) {
						 //   document.getElementById("result").innerHTML = surname  + ' ' + ' ' + name + ' ' + pname;
							document.getElementById("status-oms").innerHTML = 'Не застрахован <br> Желаете ли Вы приобрести Полис ОМС? Если <span>ДА</span>, <a href="http://foms.kg/code-payments/" target="_blank"> то нажмите на ссылку</a>';
							
						} else if (data.mhi == 1) {

							// document.getElementById("result").innerHTML = surname  + ' ' + ' ' + name + ' ' + pname;
							document.getElementById("status-oms").innerHTML = 'Статус ОМС - Застрахован';
							
						}
				} else if (this.status == 404)	 {
						document.getElementById("result").innerHTML = 'Такой ПИН не найден';
				}
			};
			// xmlhttp.open("GET", "http://195.38.186.20/api/search?pin=" + pin, true);
			xmlhttp.open("GET", "http://178.216.211.20:8000/api/v1/mhi/" + pin, true);
			xmlhttp.send();
		}
	</script>   