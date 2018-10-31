<?php
class MessagerieModel extends Model{
 /*liste complète des sectors*/
 public function Index(){
  
   
}
     //  requete Message Recu 
    public function getInboxMessage($id_get){

       $this->query('SELECT *,COUNT(`id_msg`) AS nbrmessage FROM `message` 
                INNER JOIN `utilisateur` ON `utilisateur`.`id_ut` = `message`.`id_destinataire_msg`
                WHERE `id_destinataire_msg` = :id_get ');
            $this->bind(":id_get", $id_get);
            $this->execute();
            $row = resultSet();
    }

    //  requete Message envoyer  
    public function getSentMessage($id_sent){

       $this->query('SELECT *,COUNT(`id_msg`) AS nbrmessage FROM `message` 
                INNER JOIN `utilisateur` ON `utilisateur`.`id_ut` = `message`.`id_destinataire_msg`
                WHERE `id_expediteur_msg` = :id_sent ');
            $this->bind(":id_sent", $id_sent);
            $this->execute();
            $row = resultSet();
    }

    //  methode pour ouvrir un message avec mise a jour des information Lu 
    public function readMessage($id_read){

       $this->query('SELECT * FROM `message` 
                INNER JOIN `utilisateur` ON `utilisateur`.`id_ut` = `message`.`id_destinataire_msg`
                WHERE `id_msg` = :id_read ');
            $this->bind(":id_read", $id_read);
            $this->execute();
            $row = getItem();
            // si il retourne une resultat on va faire update des champs date de lecture et mettre la valeur etat sur 1 ca veut dire lu 
            if ($row ==1 AND $row['etat_lu_msg']== 0) {
                $this->query('UPDATE `message` SET `etat_lu_msg` = 1,`date_lu_msg`= NOW()
                WHERE `id_msg` = :id_read ');
                $this->bind(":id_read", $id_read);
                $this->execute();

            }
    }

      //  requete Message non lu 
     public function newMessage($id_new){

       $this->query('SELECT *,COUNT(`etat_lu_msg`)AS nouveau_msg FROM `message`
        WHERE `id_destinataire_msg` = :id_new AND etat_lu_msg = 0');
            $this->bind(":id_new", $id_new);
            $this->execute();
            $row = resultSet();
    }


    //  requete envoyer un message 
    public function sendMessage($message){

       $this->query('INSERT INTO `message` (`message_msg`, `titre_msg`, `date_msg`, `id_expediteur_msg`, `id_destinataire_msg`, `etat_lu_msg`, `date_lu_msg`) VALUES (:message_msg,:titre_msg,:date_msg,:id_expediteur_msg,:id_destinataire_msg');
            $this->bind(':message_msg', $message->messageMessage());
            $this->bind(':titre_msg', $message->titreMessage());
            $this->bind(':date_msg', $message->dateMessage());
            $this->bind(':id_expediteur_msg', $message->idExpediteurMessage());
            $this->bind(':id_destinataire_msg', $message->idDestinataireMessage());
            $this->execute();
    }

    // Delete Message

    public function deleteMessage($id){
        $this->query("DELETE FROM message WHERE id_msg = :id");
        $this->bind(":id", $id);
        $this->execute();
    }
}