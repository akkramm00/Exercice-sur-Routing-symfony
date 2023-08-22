<?php
#[Route('/users', name: "user_liost", methods: ['GET'])]
  public function listUsers (userRepository $userRepo)
  {
    //...
  }

#[Route('/users/create', name: 'user_create', methods: ['GET', 'POST'])]
  public function createUsers(Request $request, EntityManagerInterface $em, UserPossworHasherInterface)
  {
    //...
  }

#[Route('/users/{id<\d+>}/edit', name: 'user_edit', methods: ['GET', 'POST'])]
  public function editAction(User $user, Request $request, EntityManagerInterface $em)
  {
    //...
  }
?>
