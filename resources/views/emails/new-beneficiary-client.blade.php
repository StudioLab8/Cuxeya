<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuxeya</title>
</head>
<body>
    
    <table style="max-width: 600px; padding:10px; margin: 0 auto; border-collapse:collapse; ">
        <tr>
            <td style="background-color: #ecf0f1; text-align: center; padding: 0; position: relative; width: 100%;">
                <a width="100%" style="display: block; margin-top: 50px;  " href="#">
                    <img style="text-align: center;" width="40%" style="display: block; margin: 1.5% 3%; " src="{{ $data['url_base'] }}/images/logo_cuxeya.png">
                </a>
                <!-- <img style="padding: 0; display: block;  width: 100%; " src="abuelitos-04.jpg" width="100%"> -->
            </td>
        </tr>
        <tr>
            <td style="padding: 0; ">
                
            </td>
        </tr>
        <tr>
            <td style="background-color: #ecf0f1;">
                
                <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify; font-family: sans-serif;">
                    <h2 style="color: #e67e22; margin: 0 0 7px;">¡Tu ayuda está teniendo éxito!</h2>
                    <p style="margin: 2px; font-size: 15px;"><span style="font-weight: bolder;">
                    {{ $data['user'] }} es un nuevo beneficiario que desea la ayuda. Por favor entra a la plataforma para poder darle seguimiento.
                    </span>
                    </p>
                </div>
                
            </td>
            
        </tr>
        <tr>
            <td>
                <div style="width: 100%;  text-align: center;  position: relative;">
                    <!-- <img style="padding: 0; width: 100%;  margin: 5px;"  src="abuelitos-04.jpg" alt=""> -->
                    <img style=" width: 100%; vertical-align: bottom; filter: brightness(.6);
                    " src="{{ $data['url_base'] }}/images/abuelitos-04.jpg" alt="Imagen Bienvenida Cuxeya">
                    <div style="width: 100%; text-align: center;  position: absolute; bottom:12%;">
                        
                        <a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #10bff5; border: 5px solid rgba(255, 255, 255, 0.651); font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: bolder;" href="{{ $data['url'] }}" target="_blank">Ver beneficiario</a>
                    </div>
                </div>
                
                <p style="background-color: rgb(219, 91, 91); color: #ffffff; font-size: 15px; font-weight: bolder; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; text-align: center; margin: 0; padding: 40px 0; line-height: 25px;">Cuxeya.org &copy; 2021 <br><span style="font-weight:400 "> Propiedad de Bull and Bear Fundation &reg;</span></p>
            </td>
        </tr>
    </table>
</body>
</html>