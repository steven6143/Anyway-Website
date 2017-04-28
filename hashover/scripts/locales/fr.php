<?php

// Copyright (C) 2015-2017 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.
//
// French fixed by Stéphane Mourey
//
// I, Stéphane Mourey, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// Display source code
if (basename ($_SERVER['PHP_SELF']) === basename (__FILE__)) {
	if (isset ($_GET['source'])) {
		header ('Content-type: text/plain; charset=UTF-8');
		exit (file_get_contents (basename (__FILE__)));
	}
}

// French text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> 'Écrivez ici votre commentaire...',
	'reply-form'		=> 'Écrivez ici votre réponse...',
	'comment-formatting'	=> 'Formats',
	'accepted-format'	=> '%s accepté',
	'accepted-html'		=> '&lt;b&gt;, &lt;strong&gt;, &lt;u&gt;, &lt;i&gt;, &lt;em&gt;, &lt;s&gt;, &lt;big&gt;, &lt;small&gt;, &lt;sup&gt;, &lt;sub&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;blockquote&gt;, &lt;code&gt; échappe le HTML, les URLs sont transformées en liens, et [img]URL ici[/img] fait apparaître une image externe.',
	'accepted-markdown'	=> '**Gras**, _souligné_, *italique*, ~~barré~~, `souligné`, ```code``` échappe au format HTML. HTML et Markdown peuvent être utilisés ensemble dans votre commentaire.',
	'post-button'		=> 'Publier ce commentaire',
	'login'			=> 'Identifiant',
	'login-tip'		=> 'Identifiant (optionnel)',
	'logout'		=> 'Déconnexion',
	'be-first-name'		=> 'Aucun commentaire pour l\'instant.',
	'pending-name'		=> 'En attente...',
	'deleted-name'		=> 'Supprimé...',
	'error-name'		=> 'Erreur...',
	'be-first-note'		=> 'Soyez le premier à commenter !',
	'pending-note'		=> 'Ce commentaire est en attente d\'approbation.',
	'deleted-note'		=> 'Ce commentaire a été supprimé.',
	'error-note'		=> 'Quelque chose a mal tourné. Impossible de récupérer ce commentaire.',
	'options'		=> 'Options',
	'cancel'		=> 'Annuler',
	'reply-to-comment'	=> 'Répondre au commentaire',
	'edit-your-comment'	=> 'Éditer votre commentaire',
	'optional'		=> 'Optionnel',
	'required'		=> 'Obligatoire',
	'name'			=> 'Nom',
	'name-tip'		=> 'Nom (%s)',
	'password'		=> 'Mot de passe',
	'password-tip'		=> 'Mot de passe (%s, vous permettra d\'éditer ou de supprimer ce commentaire)',
	'confirm-password'	=> 'Confirmer le mot de passe',
	'email'			=> 'Adresse E-mail',
	'email-tip'		=> 'Adresse E-mail (%s, pour les notifications e-mail)',
	'website'		=> 'Site Internet',
	'website-tip'		=> 'Site Internet (%s)',
	'logged-in'		=> 'Vous vous êtes connecté avec succès !',
	'logged-out'		=> 'Vous vous êtes deconnecté avec succès !',
	'comment-needed'	=> 'Vous avez échoué à entrer un commentaire approprié. Veuillez réessayer.',
	'reply-needed'		=> 'Vous avez échoué à entrer une réponse appropriée. Veuillez réessayer.',
	'field-needed'		=> 'Le champ "%s" est obligatoire.',
	'post-fail'		=> 'Impossible de publier ce commentaire ! Vous n\'avez pas les permissions suffisantes.',
	'comment-deleted'	=> 'Commentaire supprimé !',
	'post-reply'		=> 'Publier cette réponse',
	'delete'		=> 'Supprimer',
	'subscribe'		=> 'Avertissez-moi des réponses',
	'subscribe-tip'		=> 'Souscrire aux notifications par e-mail',
	'edit-comment'		=> 'Éditer ce commentaire',
	'status'		=> 'Statut',
	'status-approved'	=> 'Approuvé',
	'status-pending'	=> 'En attente d\'approbation',
	'status-deleted'	=> 'Marqué supprimé',
	'save-edit'		=> 'Enregistrer cette modification',
	'no-email-warning'	=> 'Vous ne recevrez pas de notifications en cas de réponse si vous ne fournissez pas d\'e-mail.',
	'invalid-email'		=> 'L\'adresse e-mail que vous avez entrée n\'est pas valide.',
	'delete-comment'	=> 'Confirmez-vous la suppression de ce commentaire ?',
	'post-comment-on'	=> array ('Poster un Commentaire', 'Poster un Commentaire sur "%s"'),
	'popular-comments'	=> array ('Commentaire le Plus Populaire', 'Commentaires les Plus Populaires'),
	'showing-comments'	=> array ('%d Commentaire Affiché', '%d Commentaires Affichés'),
	'count-link'		=> array ('%d Commentaire', '%d Commentaires'),
	'count-replies'		=> array ('%d compter réponse', '%d compter réponses'),
	'sort'			=> 'Trier',
	'sort-ascending'	=> 'Dans l\'ordre',
	'sort-descending'	=> 'Dans l\'ordre inverse',
	'sort-by-date'		=> 'La plus récente en premier',
	'sort-by-likes'		=> 'Par aiments',
	'sort-by-replies'	=> 'Par réponses',
	'sort-by-discussion'	=> 'Par discussion',
	'sort-by-popularity'	=> 'Par popularité',
	'sort-by-name'		=> 'Par commentateur',
	'sort-threads'		=> 'Fils',
	'thread'		=> 'En réponse à %s',
	'thread-tip'		=> 'Aller en haut de la discussion',
	'comments'		=> 'Commentaires',
	'replies'		=> 'Réponses',
	'edit'			=> 'Éditer',
	'reply'			=> 'Répondre',
	'like'			=> array ('J\'aime', 'Aiments'),
	'liked'			=> 'J\'aime',
	'unlike'		=> 'Défaire',
	'like-comment'		=> '\'J\'aime\' ce commentaire',
	'liked-comment'		=> 'Défaire \'J\'aime\'',
	'dislike'		=> array ('N\'aime pas', 'N\'aiment pas'),
	'disliked'		=> 'N\'aime pas',
	'dislike-comment'	=> 'Je n\'aime pas ce commentaire',
	'disliked-comment'	=> 'Vous n\'aimez pas ce commentaire',
	'commenter-tip'		=> 'Vous serez notifié par e-mail',
	'subscribed-tip'	=> 'sera notifié par e-mail',
	'unsubscribed-tip'	=> 'n\'a pas souscrit aux notifications',
	'show-other-comments'	=> array ('Afficher %d Autre Commentaire', 'Afficher %d Autres Commentaires'),
	'show-number-comments'	=> array ('Afficher %d Commentaire', 'Afficher %d Commentaires'),
	'date-time'		=> '%s \à %s',
	'date-years'		=> array ('Il y a %d an', 'Il y a %d ans'),
	'date-months'		=> array ('Il y a %d un mois', 'Il y a %d mois'),
	'date-days'		=> array ('Il y a %d jour', 'Il y a %d jours'),
	'date-today'		=> '%s aujourd\'hui',
	'date-day-names'	=> array ('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'),
	'date-month-names'	=> array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'),
	'untitled'		=> 'Sans titre',
	'external-image-tip'	=> 'Cliquez pour voir image externe',
	'loading'		=> 'Chargement...',
	'click-to-close'	=> 'Cliquez pour fermer',
	'hashover-comments'	=> 'HashOver Commentaires',
	'rss-feed'		=> 'Flux RSS',
	'source-code'		=> 'Source Code'
);
