<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Marque
 *
 * @property int $id
 * @property string $nom
 * @property string $pays
 * @property string|null $deleted_at
 * @property-read \App\Models\Produit|null $produit
 * @method static \Database\Factories\MarqueFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Marque newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marque newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marque query()
 * @method static \Illuminate\Database\Eloquent\Builder|Marque whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marque whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marque whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marque wherePays($value)
 */
	class Marque extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Produit
 *
 * @property int $id
 * @property string $nom
 * @property string $reference
 * @property float $prix
 * @property int $marque_id
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Marque> $marques
 * @property-read int|null $marques_count
 * @property-read \App\Models\Vente|null $vente
 * @method static \Database\Factories\ProduitFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Produit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereMarqueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereReference($value)
 */
	class Produit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Silber\Bouncer\Database\Ability> $abilities
 * @property-read int|null $abilities_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Silber\Bouncer\Database\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIs($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAll($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsNot($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vente
 *
 * @property int $id
 * @property string $date
 * @property string $heure
 * @property int $produit_id
 * @property int $quantite
 * @property string|null $deleted_at
 * @property-read \App\Models\Produit|null $produit
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Produit> $produits
 * @property-read int|null $produits_count
 * @method static \Database\Factories\VenteFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Vente newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vente newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vente query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vente whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vente whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vente whereHeure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vente whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vente whereProduitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vente whereQuantite($value)
 */
	class Vente extends \Eloquent {}
}

