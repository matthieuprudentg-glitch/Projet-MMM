<?php
// Modele PackCredit (placeholder pour la future connexion a la base de donnees)

class PackCredit
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function selectAll()
    {
        // A implementer : SELECT * FROM pack_credit
    }

    public function selectById($id)
    {
        // A implementer : SELECT * FROM pack_credit WHERE id = :id
    }
}
?>
