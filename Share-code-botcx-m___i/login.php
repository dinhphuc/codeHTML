<script>
    function _getToken() {
        var http = new XMLHttpRequest();
        var user = document.getElementById("user_name").value;
        var pass = document.getElementById("password").value;
        if (user == '' || pass == '') {
            alert('Nhập đầy đủ thông tin để get token');
        } else {
            var url = "./gettoken.php";
            var params = "u=" + user + "&p=" + pass + "";
            http.open("POST", url, true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            http.onreadystatechange = function () {
                if (http.readyState == 4 && http.status == 200) {
                    document.getElementById("gettoken").style.display = 'block';
                    
                    document.getElementById("gettoken").innerHTML = http.responseText;
                }
            }
            http.send(params);
        }
    }
</script>
				<div class="auth-box">
					<div class="left">
						<div class="content text">
							<div class="header">
								<div class="logo-center"><h3>PANEL THẢ TIM FACEBOOK VER3</h3></div>
								<p class="lead">Đăng nhập</p>
							</div>
                        <form method="post" action="check_login.php">
                            <div class="form-group">
                                <label><i class="fa fa-user"></i> Access Token :</label>
                                <input name="token" placeholder="Nhập Access Token bạn vào đây..." class="form-control"/>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit" name="submit">Đăng Nhập</button>
                            </div>
                        </form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<div class="header">
								<p class="lead">Access Token</p>
							</div>
				<div class="from-group" id="gettoken">
                    <div class="form-group">
                        <label>* Tài Khoản Facebook:</label>
                        <input id="user_name" placeholder="Nhập Tài Khoản Vào Đây...." class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>* Mật Khẩu Facebook:</label>
                        <input type="password" id="password" placeholder="Nhập Mật Khẩu Vào Đây...." class="form-control"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger" onclick="_getToken()">Lấy Token</button>
                        <hr>
                    </div>
                </div>
						</div>
					</div>
				</div>