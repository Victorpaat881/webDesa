<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $request;
    protected $categoryModel;
    protected $tagModel;
    protected $postModel;
    protected $postCategoryModel;
    protected $postTagModel;
    protected $commentModel;

    public function __construct()
    {
        $this->request = \Config\Services::request();
        // loading helper dari myth/Auth
        helper('auth');


        $this->categoryModel = new \App\Models\CategoryModel();
        $this->tagModel = new \App\Models\TagModel();
        $this->postModel = new \App\Models\PostModel();
        $this->postCategoryModel = new \App\Models\PostCategoryModel();
        $this->postTagModel = new \App\Models\PostTagModel();
        $this->commentModel = new \App\Models\CommentModel();
    }
    public function index(): string
    {
        $data = [
            'menu' => 'home',
            'posts' => $this->postModel->findAll(2),
            'latest_posts' => $this->postModel->findAll(2),
        ];
        return view('landing_page', $data);
    }
    public function blog($postId = ''): string
    {
        $data = [
            'menu' => 'blog',
            'post' => $this->postModel->find($postId),
            'latest_posts' => $this->postModel->findAll(3),
            'related_posts' => $this->postModel->findAll(3),
            'categories' => $this->categoryModel->findAll(),
            'tags' => $this->tagModel->findAll(),
        ];
        if (!$postId) {
            $data['posts'] = $this->postModel->findAll();
            return view('blog_menu', $data);
        } else {
            $data['comments'] = $this->commentModel->where('post_id', $postId)->findAll();
            $data['post_category'] = $this->postCategoryModel->where('post_id', $data['post']['post_id'])->find();
            $data['post_tags'] = $this->postTagModel->where('post_id', $data['post']['post_id'])->findColumn('tag_id');
            return view('blog_details', $data);
        }
    }
    public function contact(): string
    {
        $data = [
            'menu' => 'contact',
            'latest_posts' => $this->postModel->findAll(2),
        ];
        return view('contact', $data);
    }
    public function organisasi(): string
    {
        $data = [
            'menu' => 'about',
            'latest_posts' => $this->postModel->findAll(3),
            'related_posts' => $this->postModel->findAll(3),
            'categories' => $this->categoryModel->findAll(),
            'tags' => $this->tagModel->findAll(),
        ];
        return view('organisasi', $data);
    }
    public function visimisi(): string
    {
        $data = [
            'menu' => 'about',
            'latest_posts' => $this->postModel->findAll(3),
            'related_posts' => $this->postModel->findAll(3),
            'categories' => $this->categoryModel->findAll(),
            'tags' => $this->tagModel->findAll(),
        ];
        return view('visimisi', $data);
    }
    public function sejarah(): string
    {
        $data = [
            'menu' => 'about',
            'latest_posts' => $this->postModel->findAll(2),
            'categories' => $this->categoryModel->findAll(),
            'tags' => $this->tagModel->findAll(),
        ];
        return view('sejarah', $data);
    }
    public function fasilitas(): string
    {
        $data = [
            'menu' => 'about',
            'latest_posts' => $this->postModel->findAll(2),
            'categories' => $this->categoryModel->findAll(),
            'tags' => $this->tagModel->findAll(),
        ];
        return view('fasilitas', $data);
    }
    public function kependudukan(): string
    {
        $data = [
            'menu' => 'about',
            'latest_posts' => $this->postModel->findAll(2),
            'categories' => $this->categoryModel->findAll(),
            'tags' => $this->tagModel->findAll(),
        ];
        return view('kependudukan', $data);
    }
    public function create_comment($post_id)
    {
        $this->request->getPost();
        $comment_data = [
            'username' => $this->request->getPost('username'),
            'user_id' => $this->request->getPost('user_id'),
            'created_at' => $this->request->getPost('created_at'),
            'post_id' => $post_id,
            'content' => $this->request->getPost('content'),
        ];
        $this->commentModel->insert($comment_data);
        return redirect()->back();
    }
}
