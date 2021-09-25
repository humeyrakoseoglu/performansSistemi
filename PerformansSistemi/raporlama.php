<!--HÜMEYRA KÖSEOĞLU-->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="https://suggest.magna.com/oneri/img/favicon.ico">	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raporlama</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/raporlama.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jura:wght@300;500;700&display=swap');

        .form-container{
            background-color:rgb(223, 223, 223);

    background: url('images/magna1.jfif') top center;
    background-size: cover;
    height: 800px;

}
    </style>
</head>
<body>


    <div class="top-bar">

        <div class="logo">
        
            <a href="index.php" class="brand-logo">
            <img class="navbar-brand"  img src="images/logo-text.png" alt="" width="300" height="50"></a>
        </div>

        <nav class="nav">
            <ul>
                <li><a href="raporlama.php" class="active">
				<font color="#14a099"> RAPORLAMA</a></li>
                
            </ul>
        </nav>
    </div>


    <section class="raporlama">
        <div id="raporlama" class="form-container">

            <div class="flex-title">
                <h2>RAPORLAMA</h2>
            </div>
    
            <form action="#" class="form">
               <div class="column" >
                
                <div class="tablo">
                    <div class="form-group" >
                        <div class="container">
                        <label for="genel"></label>
                        </div>

                        <!--Henüz yapılmadı-->
                        <div><h1>Genel İstatistik</h1></div>
                    </div>
                </div>
            </div>
                <div class="column" >
                <div class="tablo">
                <div class="form-group">

                        <label for="highPointPerson"><br><br>				
						<br>

                        <!--Henüz yapılmadı-->
						En Yüksek Puanlıları Listele</td></label>
                        <select name="highPointPerson" id="highPointPerson" required>
                            <option value="1">İlk 10 kişi</option>
                            <option value="2">İlk 20 kişi</option>
                            <option value="3">Baraj üstü herkes</option>
                        </select>
                     </div>
                  </div> 

                <div class="tablo">
                        <div class="form-group">

                        <!--Henüz yapılmadı-->
                      <label for="lowPointPerson">Kritikte Olanları Listele</label><br>
                      <select name="lowPointPerson" id="lowPointPerson" required>
                          <option value="1">İlk 10 kişi</option>
                          <option value="2">İlk 20 kişi</option>
                          <option value="3">Baraj üstü herkes</option>
                      </select>
                   </div>

                <input type="button"  value="RAPORLA" id="make" >  
                </div>
         
                </div>
            </form>
        </div>
    </section>
</body>
</html>