<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileRequest;
use App\Models\Image;
use App\Models\Order;
use App\Models\Review;
use App\Models\User;
use App\Services\ImagesServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    protected $imagesServices;
    public function __construct(ImagesServices $imagesServices)
    {
        $this->imagesServices = $imagesServices;
    }
    function deleteImage($id)
    {
        $image = Image::find($id);
        $this->imagesServices->DeleteImageFromDirectory($image->url, "products");
        $image->delete();
        return redirect()->back()->with([
            "success" => "image deleted successfully"
        ]);
    }
    public function home()
    {
        $count = 0;
        $result = DB::select(DB::raw("SELECT c.name AS category, COUNT(o.id) AS order_count ,SUM(o.total) AS total FROM categories c JOIN sub_categories s ON c.id = s.categorie_id JOIN products p ON s.id = p.sub_categorie_id JOIN orders o ON p.id = o.product_id GROUP BY c.name;"));
        $labels = array();
        $series = array();
        $ordersCount = Order::select('order_number', DB::raw('count(*) as count'))
            ->groupBy('order_number')
            ->get();
        foreach ($ordersCount as $item) {
            $count += 1;
        }

        foreach ($result as $item) {
            array_push($labels, $item->category);
            array_push($series, $item->order_count);
        };
        return view('admin.index', compact("labels", "series", "result", "count"));
    }
    public function profile()
    {
        return view('admin.content.profile.index');
    }

    public function SetProfile(ProfileRequest $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        return redirect()->back()->with([
            "success" => "profile update with success"
        ]);
    }
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();

        // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) {
            return back()->with('error', "Current Password is Invalid");
        }

        // Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }

        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }

    public function ReviewsList()
    {
        $reviews = Review::with("Product")->paginate(10);
        return view('admin.content.reviews.index', compact('reviews'));
    }

    public function AssignLivreurToOrder($order_number, $livreur_id)
    {
        Order::where('order_number', $order_number)->update(['livreur_id' => $livreur_id]);
        return redirect()->back()->with([
            "success" => "livreur assign with success"
        ]);
    }
}
