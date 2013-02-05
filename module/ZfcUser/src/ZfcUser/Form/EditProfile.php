<?php

namespace ZfcUser\Form;

use ZfcBase\Form\ProvidesEventsForm;
use ZfcUser\Options\RegistrationOptionsInterface;
use ZfcUser\Options\AuthenticationOptionsInterface;

class EditProfile extends ProvidesEventsForm
{
    public function __construct($name = null, AuthenticationOptionsInterface $options)
    {
        $this->setAuthenticationOptions($options);
        parent::__construct($name);

        $this->add(array(
            'name' => 'identity',
            'options' => array(
                'label' => '',
            ),
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));
        
        $this->add(array(
           'name' => 'username',
           'options' => array(
               'label' => 'Username'
           ),
           'attributes' => array(
               	'type' 	=> 'text',
           		'class' => 'span3',
           ),
       ));
       
      $this->add(array(
        'name' => 'surname',
            'options' => array(
                'label' => 'Surname',
        ),
        'attributes' => array(
            'type' => 'text',
        	'class' => 'span3',
        ),
      ));
  
        $this->add(array(
           'name' => 'lastname',
           'options' => array(
               'label' => 'Lastname',
           ),
           'attributes' => array(
               'type' => 'text',
           		'class' => 'span3',
           	),
       ));
        
        $this->add(array(
            'name' => 'email',
            'options' => array(
                'label' => 'Email',
            ),
            'attributes' => array(
                'type' => 'text',
            	'class' => 'span3',
            ),
        ));

        $this->add(array(
            'name' => 'emailVerify',
            'options' => array(
                'label' => 'Verify Email',
            ),
            'attributes' => array(
                'type' => 'text',
            	'class' => 'span3',
            ),
        ));

        $this->add(array(
            'name' => 'credential',
            'options' => array(
                'label' => 'Password',
            ),
            'attributes' => array(
                'type' => 'password',
            	'class' => 'span3',
            ),
        ));
        
        $this->add(array(
        		'name' => 'profilePicture',
        		'options' => array(
        				'label' => 'Profile Picture',
        		),
        		'attributes' => array(
        				'type' => 'file',
        				
        		),
        ));
        
        $this->add(array(
        		'name' => 'submit',
        		'attributes' => array(
        				'type'  => 'submit',
        				'value' => 'Change',
        				'class' => 'btn btn-primary'
        		),
        		'options' => array(
        				'bootstrap' => array(
        					'style' => 'inline'
        				),
        		),
        ));
        

        $this->getEventManager()->trigger('init', $this);
    }

    /**
     * Set Authentication-related Options
     *
     * @param AuthenticationOptionsInterface $authOptions
     * @return Login
     */
    public function setAuthenticationOptions(AuthenticationOptionsInterface $authOptions)
    {
        $this->authOptions = $authOptions;
        return $this;
    }

    /**
     * Get Authentication-related Options
     *
     * @return AuthenticationOptionsInterface
     */
    public function getAuthenticationOptions()
    {
        return $this->authOptions;
    }
}
