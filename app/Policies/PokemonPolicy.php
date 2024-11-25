<?php
 
 namespace App\Policies;

 use App\Models\Pokemon;
 use App\Models\User;
 
 class PokemonPolicy
 {
     public function create(?User $user): bool
     {
         return !is_null($user); 
     }
 
     public function update(?User $user, Pokemon $pokemon): bool
     {
         return $user && $pokemon->coach_id === $user->id; 
     }
 
     public function delete(?User $user, Pokemon $pokemon): bool
     {
         return $user && $pokemon->coach_id === $user->id; 
     }
 }
 