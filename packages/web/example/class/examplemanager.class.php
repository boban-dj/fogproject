<?php
class ExampleManager extends FOGManagerController {
    public function install($name) {
        /** Add the information into the database.
            This is commented out so we don't actually
            create anything.
        $sql = "CREATE TABLE fog.example
        (eID INTEGER NOT NULL AUTO_INCREMENT,
        eName VARCHAR(250) NOT NULL,
        eOther VARCHAR(250) NOT NULL,
        eHostID INTEGER NOT NULL,
        PRIMARY KEY(eID),
        INDEX new_index (eHostID),
        ENGINE = MyISAM";
        *** ACTUALLY CREATES THE DATABASE TABLE FROM ABOVE ***
        if (self::$DB->query($sql)) {
            *** IF NEEDED CREATE GLOBAL ENTRIES ***
            $Example1 = new Service(array(
                'name' => 'FOG_EXAMPLE_ONE',
                'description' => 'Example one global entry.',
                'value' => '',
                'category' => 'Plugin: '.$name,
            ));
            ** SAVE THE NEW ENTRY **
            $Example1->save();
            return true;
        }
        return false;
         */
        return true;
    }
    public function uninstall() {
        return true;
    }
}