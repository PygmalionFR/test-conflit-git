<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Gestion</title>
    </head>
    <body>
        <?php
    if (isset($_POST['motDePasse']) AND $_POST['motDePasse'] ==  "azerty") 
    {
    
    ?>
       <h1 style="text-align: center;">Choisir stock:</h1>
        <div class="box">
            <a href="StockBox.php"><input type="button" value="Stock box"></a>
            <a href="Ksushi.php"><input type="button" value="K sushi"></a>     
        </div>
        <?php
    }
    else                                                                
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    <table>
        <tr id="lignetableau">
            <td style="border: 2px solid whitesmoke; width: 10%;">dd</td>
            <td style="border: 2px solid whitesmoke;"><textarea></textarea></td>
            <td style="border: 2px solid whitesmoke;"><select>
                <option>selectionner</option>
                <option>Sac</option>
                <option>carton</option>
            </select></td>
        </tr>
        <tr>
            <td style="border: 2px solid whitesmoke;"></td>
            <td style="border: 2px solid whitesmoke;"></td>
            <td style="border: 2px solid whitesmoke;"></td>
        </tr>
        <tr>
            <td style="border: 2px solid whitesmoke;"></td>
            <td style="border: 2px solid whitesmoke;"></td>
            <td style="border: 2px solid whitesmoke;"></td>
        </tr>
    </table>
    </body>
</html>

