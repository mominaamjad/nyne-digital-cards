 public function generatePersonalQR(Request $request) {
        $email = $request->session()->get('email');
        $user=DB::table('user')->where('email', $email)->first();

        $data = $user->fname.$user->lname.$user->email.$user->location;
        $qrCode = QrCode::size(300)->generate($data);

        // Save the QR code image to the server
        $filePath = public_path('qrcodes/') . 'qrcode_' . time() . '.png';
        file_put_contents($filePath, $qrCode);

        $personal = DB::table('personal')->where('email', $email)->first();

        // Update the QR code file path in the companies table
        $personal->QR_code = $filePath;
        $personal->save();
    }
    public function generateCompanyQR(Request $request) {
                
        $email = $request->session()->get('email');
        $user=DB::table('user')->where('email', $email)->first();
        $user_company=DB::table('company')->where('email', $email)->first();

        $data = $user->fname.$user->lname.$user->email.$user->location.$user_company->comp_name.$user_company->job_title;
        $qrCode = QrCode::size(300)->generate($data);

        // Save the QR code image to the server
        $filePath = public_path('qrcodes/') . 'qrcode_' . time() . '.png';
        file_put_contents($filePath, $qrCode);

        $company = DB::table('company')->where('email', $email)->first();

        // Update the QR code file path in the companies table
        $company->QR_code = $filePath;
        $company->save();
    }










    ////modified
    public function generatePersonalQR($fname,$lname,$email,$location) {

        $data = $fname.$lname.$email.$location;
        $qrCode = QrCode::size(300)->generate($data);

        // Save the QR code image to the server
        $filePath = public_path('qrcodes\\') . 'qrcode_' . time() . '.png';
        file_put_contents($filePath, $qrCode);

        return 'qrcode_' . time() . '.png';
    }
    public function generateCompanyQR($fname, $lname, $email, $location,$cname,$role) {

        $data = $fname.$lname.$email.$location.$cname.$role;
        $qrCode = QrCode::size(300)->generate($data);

        // Save the QR code image to the server
        $filePath = public_path('qrcodes\\') . 'qrcode_' . time() . '.png';
        file_put_contents($filePath, $qrCode);
        
        return 'qrcode_' . time() . '.png';
    }