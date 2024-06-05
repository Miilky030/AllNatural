<?php
namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SessionRegistrationTest extends TestCase
{
    use RefreshDatabase;

    
     /* Test if user registration saves name, email, password, and password confirmation to the database.
     *
     */
    

    public function test_user_registration_saves_to_database()
    {
        // Datos de usuario para registrar
        $userData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        // Realizar una solicitud POST para registrar al usuario
        $response = $this->post('/register', $userData);

        // Verificar que el usuario se ha registrado correctamente en la base de datos
        $this->assertDatabaseHas('users', [
            'name' => $userData['name'],
            'email' => $userData['email'],
        ]);

        // Obtener el usuario de la base de datos
        $user = User::where('email', $userData['email'])->first();

        // Verificar que la contraseña se ha almacenado correctamente utilizando Hash::check
        $this->assertTrue(Hash::check($userData['password'], $user->password));
    }
}