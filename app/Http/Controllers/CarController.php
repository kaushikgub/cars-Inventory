<?php

namespace App\Http\Controllers;

use App\Model\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function loadListingIndex(){
        $cars = Car::all();
        return view('admin-car-list', compact('cars'));
    }

    public function loadCarUploadIndex(){
        return view('admin-car-upload');
    }

    public function CarSearch(Request $request){
        $request->validate([
            'car-years' => 'required|integer',
        ]);

        $makes = $request['car-makes'];
        $model = $request['car-models'];

        $cars = Car::where('car_years', $request['car-years'])
            ->where(function ($query) use ($makes, $model) {
                if ($makes !== null)
                    $query->where('car_makes',  $makes);
                if ($model !== null)
                    $query->where('car_models',  $model);
        })->get();


        return response()->json($cars);
    }

    public function uploadCar(Request $request){
        $request->validate([
            'asking_price' => 'required|integer',
            'car_makes' => 'required|max:255',
            'car_models' => 'nullable|max:255',
            'car_years' => 'required|integer',
            'condition' => 'required|max:255',
            'cylinders' => 'required|max:255',
            'has_registration' => 'required|max:255',
            'has_title' => 'required|max:255',
            'transmission' => 'required|max:255',
            'description' => 'nullable',
            'image_1' => 'required',
        ]);

        $data = $request->except('_token', 'image_1', 'image_2', 'image_3', 'image_4');
        $image_1 = $request->file('image_1') === null ? null : $request->file('image_1')->storeAs('/image/'.$request['car_models'], '1-'.time() . '.' . $request->file('image_1')->getClientOriginalExtension(), 'public');
        $image_2 = $request->file('image_2') === null ? null : $request->file('image_2')->storeAs('/image/'.$request['car_models'], '2-'.time() . '.' . $request->file('image_2')->getClientOriginalExtension(), 'public');
        $image_3 = $request->file('image_3') === null ? null : $request->file('image_3')->storeAs('/image/'.$request['car_models'], '3-'.time() . '.' . $request->file('image_3')->getClientOriginalExtension(), 'public');
        $image_4 = $request->file('image_4') === null ? null : $request->file('image_4')->storeAs('/image/'.$request['car_models'], '4-'.time() . '.' . $request->file('image_4')->getClientOriginalExtension(), 'public');

        $data['image_1'] = $image_1;
        $data['image_2'] = $image_2;
        $data['image_3'] = $image_3;
        $data['image_4'] = $image_4;

        $data['available'] = 'Available';

        Car::create($data);

        return response()->json('Car upload Successfully');
    }

    public function loadCarInIndexPage($sort){
        if ($sort == 'all'){
            $cars = Car::all();
        } elseif ($sort == 'new'){
            $cars = Car::orderBy('created_at', 'desc')->get();

        } elseif ($sort == 'price'){
            $cars = Car::orderBy('asking_price', 'asc')->get();
        }
        return response()->json($cars);
    }

    public function carDetails($id){
        $car = Car::find($id);
        return view('car-details', compact('car'));
    }
    public function adminCarEdit($id){
        $car = Car::find($id);
        return view('admin-car-edit', compact('car'));
    }

    public function adminCarDelete($id){
        Car::where('id', $id)->delete();
        $cars = Car::all();
        return redirect('admin-panel/car-list');
    }

    public function adminCarSellUpdate($id){
        $car = Car::find($id);
        if ($car['available'] == 'Available'){
            Car::where('id', $id)->update(['available' => 'Sold']);
        } elseif ($car['available'] == 'Sold'){
            Car::where('id', $id)->update(['available' => 'Available']);
        }
        return redirect('admin-panel/car-list');
    }

    public function updateCar(Request $request){
        $request->validate([
            'asking_price' => 'required|integer',
            'car_makes' => 'required|max:255',
            'car_models' => 'nullable|max:255',
            'car_years' => 'required|integer',
            'condition' => 'required|max:255',
            'cylinders' => 'required|max:255',
            'has_registration' => 'required|max:255',
            'has_title' => 'required|max:255',
            'transmission' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $data = $request->except('id','_token', 'image_1', 'image_2', 'image_3', 'image_4');
        $image_1 = $request->file('image_1') === null ? null : $request->file('image_1')->storeAs('/image/'.$request['car_models'], '1-'.time() . '.' . $request->file('image_1')->getClientOriginalExtension(), 'public');
        $image_2 = $request->file('image_2') === null ? null : $request->file('image_2')->storeAs('/image/'.$request['car_models'], '2-'.time() . '.' . $request->file('image_2')->getClientOriginalExtension(), 'public');
        $image_3 = $request->file('image_3') === null ? null : $request->file('image_3')->storeAs('/image/'.$request['car_models'], '3-'.time() . '.' . $request->file('image_3')->getClientOriginalExtension(), 'public');
        $image_4 = $request->file('image_4') === null ? null : $request->file('image_4')->storeAs('/image/'.$request['car_models'], '4-'.time() . '.' . $request->file('image_4')->getClientOriginalExtension(), 'public');

        if ($image_1 != null){
            $data['image_1'] = $image_1;
        }
        if ($image_2 != null){
            $data['image_2'] = $image_2;
        }
        if ($image_3 != null){
            $data['image_3'] = $image_3;
        }
        if ($image_4 != null){
            $data['image_4'] = $image_4;
        }

        Car::where('id', $request['id'])->update($data);

        return response()->json('Car update successfully');
    }

}
