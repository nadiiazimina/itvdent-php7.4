<?php

//Механизм исключения - выбрасываем какое-то исключение и в другом месте мы его ловим и обрабатываем 
//Подходит для нестандратных ситуаций
// try / catch -  конструкции языка которые позволяют нам заключить некий код в блоке try и если в этом блоке выброситься исключение то поймать его в блоке catch (количество блоков catch не ограничено)
//Исключение внутри себя имеет меседж, код ошибки, файл нейм (место в тором произошел сбой), строка где произощел сбой, previous Exception - ссылка на другой обьект исключения 

//Throwable - общий интрефейс для всех исключений (когда мы ловим ошибку или исключение с помощью Throwable мы будем отлавливать все что является его реализацией)

//finaly - блок который в обязательном порядке после блока try. Выполняет некую логику полсе try не зависимо от того было ли какое-то исключение 
class User
{
    private $username;

    public function setUsername(string $username)
    {
        if(mb_strlen($username) > 0 && mb_strlen($username) < 50)
        {
            $this->username = $username;
        }
        elseif(mb_strlen($username) > 0 && mb_strlen($username) > 50)
        {
        throw new LogicException("too long $username");

        }
        else
        {
        //throw 
    
        throw new Exception("incorrect value $username");
        // die("incorrect value $username");
    
         //выбрасываем исключение 
         // ловим + обрабатываем
        
        }
    } 
}



try
{
    $me = new User();
    $me -> setUsername("vnfiovnrofvnmrofnvojrgnvojrnfvojnrfovnorfnvoirfnvokrnfmovknrofnvorkgnvokrnfmvkomfrkmvofnrvokrgnmvobkngrokvnrkognmvkrfmvokrgnvoknrgokgvnokrfgnmvkorgfmvkomkfnvmkgfnvkgfnrmkvmrok"); 

}
// catch(LogicException $e)
// {
//     echo "LogicException";
// }
// catch(Exception $e)
// {
//     echo "Exception";
// }
// catch (Throwable $ex)
// {
//     echo "Throwable";
// }
catch (Throwable $ex)
{
    throw $ex;
}
finally
{
    echo "Finally!!!";
}



