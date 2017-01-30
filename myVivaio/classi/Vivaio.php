<?php

class Vivaio {

    public static function AggiungiNuovo(array $post) {
        $nome = self::_cleanString($post['nome']);
        $immagine = self::_cleanString($post['immagine']);
        $categoria = self::_cleanString($post['categoria']);
        $sqlString = "INSERT INTO piante(nome,immagine,cod_cat)
              VALUES('$nome','$immagine','$categoria')";
        try {
            $GLOBALS['db']->chiedi($sqlString);
            return true;
        } catch (Exception $e) {
            return 'Errore: ' . $e->getMessage();
        }
    }

    public static function Aggiorna(array $post) {
        $piantaId = $post['piantaid'];
        $nome = self::_cleanString($post['nome']);
        $immagine = self::_cleanString($post['immagine']);
        $categoria = self::_cleanString($post['categoria']);
        $sqlString = "UPDATE piante " .
                "SET nome='$nome',immagine='$immagine',cod_cat='$categoria' " .
                "WHERE pk_pianta=$piantaId ";
        try {
            $GLOBALS['db']->chiedi($sqlString);
            return true;
        } catch (Exception $e) {
            return 'Errore: ' . $e->getMessage();
        }
    }

    /*
     * UPDATE piante
     * SET nome_cli='...',cognome_cli='...'
     * WHERE pk_cod_cli=...
     *
     */

    # tutti i piante ordinati per cognome e poi nome

    public static function Tutti() {
        $sqlString = 'SELECT * FROM piante ORDER BY nome';
        return $GLOBALS['db']->chiedi($sqlString)->fetch_all(MYSQLI_ASSOC);
//        $setRisultati = $GLOBALS['db']->chiedi($sqlString);
//        $records = array();
//        $continua = true;
//        while ($continua) :
//            $record = $setRisultati->fetch_assoc();
//            if ($record != null) :
//                $records[] = $record;
//            else :
//                $continua = false;
//            endif;
//        endwhile;
//        return $records;
    }

    public static function Cerca(array $get) {
        $sqlString = "SELECT * FROM piante WHERE pk_pianta={$get['piantaid']}";
//        $piante = $GLOBALS['db']->chiedi($sqlString)->fetch_all(MYSQLI_ASSOC);
//        return $piante[0];
        $pianta = $GLOBALS['db']->chiedi($sqlString)->fetch_assoc();
        return $pianta;
    }

    public static function Elimina(array $get) {
        $sqlString = "DELETE FROM piante WHERE pk_pianta={$get['piantaid']}";
//        $piante = $GLOBALS['db']->chiedi($sqlString)->fetch_all(MYSQLI_ASSOC);
//        return $piante[0];
        $pianta = $GLOBALS['db']->chiedi($sqlString);
        return $pianta;
    }

    public static function Login(array $post) {
        $user = self::_cleanString($post['user']);
        $password = self::_cleanString($post['password']);
        $sqlString = "SELECT * FROM utenti WHERE nome=$user and parola=$password";
        try {
            $GLOBALS['db']->chiedi($sqlString);
            return true;
        } catch (Exception $e) {
            return 'Errore: ' . $e->getMessage();
        }
    }

    private static function _cleanString($string) {
        return str_replace("'", "''", $string);
    }

}
