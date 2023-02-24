package com.example.demo.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import com.example.demo.entity.Gallery;
import com.example.demo.repository.GalleryCrudRepository;

@Controller
@RequestMapping("digder")
public class DigController {
	
	//ギャラリー画面
	@Autowired 
	private GalleryCrudRepository repository;

	@GetMapping("gallery")
	public String indexView(Model model) {
		Iterable<Gallery> photo = repository.findAll();
		model.addAttribute("photo",photo);
		return "gallery";
	}
	
	//TOP画面
	@GetMapping("top")
	public String topView() {
		
		//http://localhost:8080/digder/top
		return "top";
				
	}
	
	//メモ画面
	@GetMapping("memo")
	public String memoView() {
		
		//http://localhost:8080/digder/memo
		return "memo";
				
	}
	
	//サインイン画面
	@GetMapping("sign-in")
	public String signInView() {
		
		//http://localhost:8080/digder/sign-in
		return "sign-in";
		
	}
	
	//サインアップ画面
	@GetMapping("sign-up")
	public String signUpView() {
		
		//http://localhost:8080/digder/sign-up
		return "sign-up";
		
	}
	
	//アップロード画面
	@GetMapping("uploadStyle")
	public String uploadView() {
		
		return "uploadStyle";
		
	}
	

}
