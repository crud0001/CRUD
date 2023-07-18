<div class="box">
        <form action="teste_login.php" method="POST">
            <fieldset>
                

                <legend><b>Login</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="LabeLInput">Nome </label>
                </div>
                
               
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="telefone" class="inputUser" required>
                    <label for="telefone" class="LabeLInput">Senha</label>
                </div>
                
                    
                <br><br>
                <input type="submit" name="submit" id="submit">
                
            </fieldset>
        </form>

    </div>
    <a href="cadastrar.php">Voltar</a>

<style>

/* 
        h1{
            color: black;
            font-size: 80px;
            text-align: center;
        } */
    
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;    
        }
        /* fieldset{
            border: 3px solid dodgerblue;
        } */
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            color: white;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .LabeLInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .LabeLInput, .inputUser:valid ~ .LabeLInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
       

    </style>
