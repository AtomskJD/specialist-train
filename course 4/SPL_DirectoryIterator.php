<?php
    /*** class definition to extend Directory Iterator class ***/
    class DirectoryReader extends DirectoryIterator
    {
        // constructor.. duh!
        
        /*** members are only valid if they are a directory ***/
        function valid()
        {
            if(parent::valid())
            {
                if (!parent::isFile())
                {
                    parent::next();
                    return $this->valid();
                }
            return TRUE;
            }
            return FALSE;
        }

    } // end class

    try
    {
        //==========================================
        /*** a new iterator object ***/
        $it = new DirectoryReader('./');
        /*** loop over the object if valid ***/
        foreach ($it as $key) {
            echo ($key)."<br>";
        }
        //===========================================
        $it->rewind();
        while($it->valid())
        {
            /*** echo the current object member ***/
            echo $it->current().'<br />';
            /*** advance the internal pointer ***/
            $it->next();
        }
    }
    catch(Exception $e)
    {
        echo 'No files Found!<br />';
    }

?>