<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EnumsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $object)
    {
        $object = Str::studly($object);
        $enum = 'App\\Enums\\' . $object;

        abort_unless(class_exists($enum), 404);

        $data = [];

        foreach ($enum::cases() as $case) {
            $data[$case->value] = $case->label();
        }
        return response()->json([
            'data' => $data
        ]);
    }
}
